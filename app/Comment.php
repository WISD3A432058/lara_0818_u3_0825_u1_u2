<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Post;


class Comment extends Model
{
    //增加關聯
    public function post()
    {
    return $this->belongsTo(Post::class);
    }
}
