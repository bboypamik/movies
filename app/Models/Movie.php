<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'genre', 'director', 'storyline', 'year_of_making'];

    public function createComment($content)
    {
        return $this->comments()->create([
            'content' => $content
        ]);
    }

    public function comments()
    {

        return $this->hasMany(Comment::class);
    }
}
