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

class GenerateOpening implements ShouldQueue
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

        if ($this->article['opening'] === null) {
            $opening = null;
            try {
                $opening = $this->generateText('opening', $keyword['title']);
            } catch (\Exception $e) {
                Log::info('Request Generate opening for Keyword ' . $keyword['title'] . ' failed');
            }
            if ($opening !== null) {
                if (isset($opening['choices']) && isset($opening['choices'][0]) && isset($opening['choices'][0]['text'])) {
                    $this->article['opening'] = $this->formatNumber($opening['choices'][0]['text']);
                    $this->article->save();
                } else {
                    Log::info('Invalid json 2 for Generate opening for Keyword ' . $keyword['title']);
                }
            } else {
                Log::info('Invalid json 1 for Generate opening for Keyword ' . $keyword['title']);
            }

        }
    }
}
