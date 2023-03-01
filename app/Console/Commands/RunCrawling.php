<?php

namespace App\Console\Commands;

use App\Jobs\GenerateArticle;
use App\Models\Keyword;
use Illuminate\Console\Command;

class RunCrawling extends Command
{
    protected $signature = 'run:crawling';

    protected $description = 'Command description';

    public function handle()
    {
        $keywords = Keyword::where('is_ready', 0)->get();
        foreach ($keywords as $keyword) {
            dispatch(new GenerateArticle($keyword));
        }
    }
}
