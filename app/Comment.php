<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Post;


class Comment extends Model
{
    //設定 model 對應到的資料表
    protected $table= 'comments' ;

    //設定 Comment.php的 fillable屬性
    protected $fillable= [
        'title',
        'content_2',
        'is_feature'
    ];
    //增加關聯
    public function post()
    {
    return $this->belongsTo(Post::class);
    }
}
