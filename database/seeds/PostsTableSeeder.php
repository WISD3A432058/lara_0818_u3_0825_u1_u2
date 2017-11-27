<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 在新建立的   seeder   檔案裡，撰寫    run     方法的內容
       foreach (range(1,20) as $number){
           Post::create([
               'title'=>'title'.$number,
               'content'=>'content'.$number,
           ]);
       }
    }
}
