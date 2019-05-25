<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'body'
    ];

    public function handle(string $name) 
    {
        $post = new Post();
        return$post->handle($request->input('name'));
    }
}
