<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    use HasFactory;

    public function article(){
        return $this->hasOne(Article::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
