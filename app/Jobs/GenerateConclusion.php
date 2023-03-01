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

class GenerateConclusion implements ShouldQueue
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

        if ($this->article['conclusion'] === null) {
            $conclusion = null;
            try {
                $conclusion = $this->generateText('conclusion', $keyword['title']);
            } catch (\Exception $e) {
                Log::info('Request Generate conclusion for Keyword ' . $keyword['title'] . ' failed');
            }
            if ($conclusion !== null) {
                if (isset($conclusion['choices']) && isset($conclusion['choices'][0]) && isset($conclusion['choices'][0]['text'])) {
                    $this->article['conclusion'] = $this->formatNumber($conclusion['choices'][0]['text']);
                    $this->article->save();
                } else {
                    Log::info('Invalid json 2 for Generate conclusion for Keyword ' . $keyword['title']);
                }
            } else {
                Log::info('Invalid json 1 for Generate conclusion for Keyword ' . $keyword['title']);
            }

        }
    }
}
