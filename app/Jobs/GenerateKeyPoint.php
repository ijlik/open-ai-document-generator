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

class GenerateKeyPoint implements ShouldQueue
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

        if ($this->article['key_point'] === null) {
            $key_point = null;
            try {
                $key_point = $this->generateText('key_point', $keyword['title']);
            } catch (\Exception $e) {
                Log::info('Request Generate key_point for Keyword ' . $keyword['title'] . ' failed');
            }
            if ($key_point !== null) {
                if (isset($key_point['choices']) && isset($key_point['choices'][0]) && isset($key_point['choices'][0]['text'])) {
                    $this->article['key_point'] = $this->formatNumber($key_point['choices'][0]['text']);
                    $this->article->save();
                } else {
                    Log::info('Invalid json 2 for Generate key_point for Keyword ' . $keyword['title']);
                }
            } else {
                Log::info('Invalid json 1 for Generate key_point for Keyword ' . $keyword['title']);
            }

        }
    }
}
