<?php

namespace App\Jobs;

use App\Models\Article;
use App\Traits\OpenAi;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class GenerateContent implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, OpenAi;

    private Article $article;

    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    public function handle()
    {
        $this->article->load('keyword');
        $keyword = $this->article['keyword'];

        if ($this->article['content'] === null) {
            $content = null;
            try {
                $content = $this->generateText('content', $keyword['title']);
            } catch (\Exception $e) {
                Log::info('Request Generate content for Keyword ' . $keyword['title'] . ' failed');
            }
            if ($content !== null) {
                if (isset($content['choices']) && isset($content['choices'][0]) && isset($content['choices'][0]['text'])) {
                    $this->article['content'] = $this->formatNumber($content['choices'][0]['text']);
                    $this->article->save();
                } else {
                    Log::info('Invalid json 2 for Generate content for Keyword ' . $keyword['title']);
                }
            } else {
                Log::info('Invalid json 1 for Generate content for Keyword ' . $keyword['title']);
            }

        }
    }
}
