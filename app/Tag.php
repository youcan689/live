<?php

namespace App;

use App\Article;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    protected $fillable = [
        'title',
    ];

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
