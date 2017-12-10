<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        return $this->hasMany('App\User', 'author_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'post_id', 'id');
    }

    public static function getPaginatedPosts()
    {
        $posts = self::paginate(5);
        
        foreach ($posts as &$post) {
            $author = User::find($post->author_id);
            $post->author_name = $author->name;
        }

        return $posts;
    }
}
