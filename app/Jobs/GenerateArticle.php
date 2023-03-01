<?php

namespace App\Jobs;

use App\Models\Article;
use App\Models\Keyword;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class GenerateArticle implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private Keyword $keyword;

    public function __construct(Keyword $keyword)
    {
        $this->keyword = $keyword;
    }

    public function handle()
    {
        if (!$this->keyword['is_ready']) {
            $this->keyword->load('article');
            if ($this->keyword['article'] === null) {
                $newArticle = new Article();
                $this->keyword->article()->save($newArticle);
            }
            $this->keyword->load('article');
            $article = $this->keyword['article'];
            if ($article['opening'] === null || $article['content'] === null || $article['conclusion'] === null || $article['key_point'] === null) {
                if ($article['opening'] === null) {
                    dispatch(new GenerateOpening($article));
                }
                if ($article['content'] === null) {
                    dispatch(new GenerateContent($article));
                }
                if ($article['conclusion'] === null) {
                    dispatch(new GenerateConclusion($article));
                }
                if ($article['key_point'] === null) {
                    dispatch(new GenerateKeyPoint($article));
                }
            } else {
                $this->keyword['is_ready'] = 1;
                $this->keyword->save();
            }
        }
    }
}
