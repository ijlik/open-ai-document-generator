<?php

namespace App\Console\Commands;

use App\Models\Article;
use App\Models\Keyword;
use Illuminate\Console\Command;

class ClearContent extends Command
{
    protected $signature = 'content:clear';

    protected $description = 'Command description';

    public function handle()
    {
        Keyword::get()->each(function ($k){
           $k->is_ready = 0;
           $k->save();
        });

        Article::truncate();
    }
}
