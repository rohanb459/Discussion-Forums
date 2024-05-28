<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'caption' => 'Yhi hai mera post',
                'photo' => 'https://d1rezxi0gcra7v.cloudfront.net/zerokaata-studio/wp-content/uploads/2020/06/27-most-beautiful-women-in-the-world-updated-list-featured-image.jpg',
                'created_at' => '2024-03-26 16:42:46',
                'updated_at' => '2024-05-13 10:11:58',
                'user_id' => 10,
                'active' => 0,
            ),
            1 => 
            array (
                'id' => 10,
                'caption' => 'jhbkjk',
                'photo' => 'https://res.cloudinary.com/dpq6l07jh/image/upload/v1711625100/vjdfbepxyurt5xdf7jct.png',
                'created_at' => '2024-03-28 11:25:00',
                'updated_at' => '2024-05-13 10:19:56',
                'user_id' => 10,
                'active' => 0,
            ),
            2 => 
            array (
                'id' => 16,
                'caption' => 'post by admin@gmaill.com',
                'photo' => NULL,
                'created_at' => '2024-05-13 11:55:15',
                'updated_at' => '2024-05-13 11:55:15',
                'user_id' => 10,
                'active' => 1,
            ),
            3 => 
            array (
                'id' => 17,
                'caption' => 'hello tarbooz khaoge?',
                'photo' => 'https://res.cloudinary.com/dpq6l07jh/image/upload/v1715601398/zy1jpp5sha0aruteq00d.jpg',
                'created_at' => '2024-05-13 11:56:39',
                'updated_at' => '2024-05-13 11:56:39',
                'user_id' => 23,
                'active' => 1,
            ),
            4 => 
            array (
                'id' => 18,
                'caption' => 'mai hoo ek udta robo doraemon',
                'photo' => 'https://res.cloudinary.com/dpq6l07jh/image/upload/v1715601609/a4n6zmuh5aj9dtsiuxh8.jpg',
                'created_at' => '2024-05-13 12:00:10',
                'updated_at' => '2024-05-13 12:00:10',
                'user_id' => 19,
                'active' => 1,
            ),
        ));
        
        
    }
}