<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        //將   seeder   設定至    DatabaseSeeder     內
        $this->call(PostsTableSeeder::class);
    }
}
