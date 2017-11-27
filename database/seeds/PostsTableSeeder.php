<?php

use Illuminate\Database\Seeder;
use App\Post;
use Carbon\Carbon;
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 每次   seeding   前先清空資料表
        Post::truncate();
        //使用 Faker 讓資料更擬真
        $faker=Faker::create('zh_TW');

        // 在新建立的   seeder   檔案裡，撰寫    run     方法的內容
       foreach (range(1,20) as $number){
           $total= 20;
           Post::create([
               /*
               'title'=>'title'.$number,
               'content'=>'content'.$number,
               'is_feature' => rand(0,1),
               'created_at' => Carbon::now() ->subDays($total - $number),
               'updated_at' => Carbon::now() ->subDays($total - $number),
               */
               //使用 Faker 讓資料更擬真
               'title' => $faker->sentence,
               'content' => $faker->paragraph,

               ]);
       }
    }
}
