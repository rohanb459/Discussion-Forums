<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserinfosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('userinfos')->delete();
        
        \DB::table('userinfos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'firstName' => 'Adminnnnn1',
                'lastName' => 'admin',
                'about' => 'Hi i am the admin123',
                'email' => 'admin@gmail.com',
                'location' => 'Delhise',
                'country' => 'Indiase',
                'created_at' => NULL,
                'updated_at' => '2024-03-28 07:05:37',
                'photo' => 'https://res.cloudinary.com/dpq6l07jh/image/upload/v1711609536/gsihok0rcgmkuo94dkfi.jpg',
            ),
            1 => 
            array (
                'id' => 2,
                'firstName' => 'rohan',
                'lastName' => 'bhatia',
                'about' => 'hi there',
                'email' => 'rohan1@gmail.com',
                'location' => 'washington',
                'country' => 'USA',
                'created_at' => '2024-04-01 11:34:56',
                'updated_at' => '2024-04-01 11:34:56',
                'photo' => 'C:\\xampp8.2\\tmp\\php51BC.tmp',
            ),
            2 => 
            array (
                'id' => 3,
                'firstName' => 'Tripti',
                'lastName' => 'Singla',
                'about' => 'Hi , I am new here',
                'email' => 'triptisingla@gmail.com',
                'location' => 'delhi',
                'country' => 'India',
                'created_at' => '2024-04-01 11:45:19',
                'updated_at' => '2024-04-01 11:45:19',
                'photo' => 'https://res.cloudinary.com/dpq6l07jh/image/upload/v1711971916/nf1newqx2ibrwffrleqs.jpg',
            ),
            3 => 
            array (
                'id' => 4,
                'firstName' => 'adf',
                'lastName' => 'adf',
                'about' => 'adf',
                'email' => 'admin99@gmail.com',
                'location' => 'adf',
                'country' => 'adf',
                'created_at' => '2024-04-01 12:42:35',
                'updated_at' => '2024-04-01 12:42:35',
                'photo' => 'https://res.cloudinary.com/dpq6l07jh/image/upload/v1711975353/lb3lrhbli1udbvggg2k5.png',
            ),
            4 => 
            array (
                'id' => 5,
                'firstName' => 'Vansh',
                'lastName' => 'Bansa;',
                'about' => 'adkf',
                'email' => 'vansh@gmail.com',
                'location' => 'asdoi',
                'country' => 'adiof',
                'created_at' => '2024-05-09 11:59:22',
                'updated_at' => '2024-05-09 11:59:22',
                'photo' => 'https://res.cloudinary.com/dpq6l07jh/image/upload/v1715255961/jwvnl8vanmkfb9oprjh4.jpg',
            ),
            5 => 
            array (
                'id' => 6,
                'firstName' => 'shruit',
                'lastName' => 'daklfjdfd',
                'about' => 'dsf',
                'email' => 'shruti@gmail.com',
                'location' => 'adf',
                'country' => 'adf',
                'created_at' => '2024-05-09 12:15:31',
                'updated_at' => '2024-05-09 12:15:31',
                'photo' => 'https://res.cloudinary.com/dpq6l07jh/image/upload/v1715256930/ndy2t6kt2jnhzitfc6wl.jpg',
            ),
            6 => 
            array (
                'id' => 7,
                'firstName' => 'gomsi',
                'lastName' => 'mittal',
                'about' => 'alkdf',
                'email' => 'gomsi@gmail.com',
                'location' => 'adf',
                'country' => 'ad',
                'created_at' => '2024-05-13 05:09:14',
                'updated_at' => '2024-05-13 05:09:14',
                'photo' => 'https://res.cloudinary.com/dpq6l07jh/image/upload/v1715576953/ezlyizh8szoaptb8hfgy.jpg',
            ),
        ));
        
        
    }
}