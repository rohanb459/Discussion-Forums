<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 10,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$1JPO4UuimEgaFfqson0UjOijXFvqXCnI6VWut8Pyt2nV3a641rnw2',
                'remember_token' => NULL,
                'created_at' => '2024-03-15 04:19:39',
                'updated_at' => '2024-03-15 04:19:39',
                'is_verified' => 1,
                'role' => 'admin',
            ),
            1 => 
            array (
                'id' => 11,
                'name' => 'Tripti',
                'email' => 'tripti123@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$4pZHlJtLcu72FPQvRNYSpubaYgHSiTTNdNrX/kUFxqwWK0OPqVdKy',
                'remember_token' => NULL,
                'created_at' => '2024-04-01 07:31:15',
                'updated_at' => '2024-04-01 07:31:15',
                'is_verified' => 0,
                'role' => 'user',
            ),
            2 => 
            array (
                'id' => 12,
                'name' => 'Tripti',
                'email' => 'tripti1243@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$v.AiIXox6aFmI2R3K7Wq0eC0Jin2uzcq5jXkbRz8n6xDWG4.jXn..',
                'remember_token' => NULL,
                'created_at' => '2024-04-01 07:33:36',
                'updated_at' => '2024-04-01 07:33:36',
                'is_verified' => 0,
                'role' => 'user',
            ),
            3 => 
            array (
                'id' => 13,
                'name' => 'Tripti',
                'email' => 'tripti12431232@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$X6hf8CYZ..GWftXMI.6jdOtgZdQmSoWT.YAq6mJ7fbZgw3YjdCqAe',
                'remember_token' => NULL,
                'created_at' => '2024-04-01 07:35:47',
                'updated_at' => '2024-04-01 07:35:47',
                'is_verified' => 0,
                'role' => 'user',
            ),
            4 => 
            array (
                'id' => 14,
                'name' => 'Tripti',
                'email' => 'tripti124312312@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$SCPO4y/iOm6Cki7GGjIfM..ZZxox7VwtrQ6Gb4deYe1VT1Qf.I7f.',
                'remember_token' => NULL,
                'created_at' => '2024-04-01 07:36:20',
                'updated_at' => '2024-04-01 07:36:20',
                'is_verified' => 0,
                'role' => 'user',
            ),
            5 => 
            array (
                'id' => 15,
                'name' => 'Tripti',
                'email' => 'tripti1243123112@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$/FEIQsz61NB7ebdP4.8P1.qduRG7CLkkYv.dD3gnjKwNUQ7mUP6am',
                'remember_token' => NULL,
                'created_at' => '2024-04-01 07:38:13',
                'updated_at' => '2024-04-01 07:38:13',
                'is_verified' => 0,
                'role' => 'user',
            ),
            6 => 
            array (
                'id' => 16,
                'name' => 'Tripti',
                'email' => 'tripti12431231112@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$LIiZd5SKfgC30sy7stRNOu5Be6vLmTMrVmyVD1wVMwnNdNLRUZE2u',
                'remember_token' => 'CwW8HvZc9qsJ5sqe9hDJkbWEgIoaGt16wRvF3PPS',
                'created_at' => '2024-04-01 07:39:08',
                'updated_at' => '2024-04-01 07:39:14',
                'is_verified' => 0,
                'role' => 'user',
            ),
            7 => 
            array (
                'id' => 17,
                'name' => 'rohan',
                'email' => 'rohan1@gmail.com',
                'email_verified_at' => '2024-04-01 10:03:15',
                'password' => '$2y$12$CI4VRb9Z1vRQ.4EB0fyw4OFXJPcZ26Mdwk3ru.KSxiyvX7MOsIss.',
                'remember_token' => '',
                'created_at' => '2024-04-01 09:19:30',
                'updated_at' => '2024-04-01 10:03:15',
                'is_verified' => 1,
                'role' => 'user',
            ),
            8 => 
            array (
                'id' => 18,
                'name' => 'Tripti',
                'email' => 'triptisingla@gmail.com',
                'email_verified_at' => '2024-04-01 11:43:06',
                'password' => '$2y$12$pMzBSf1VgeB31ENCB64GvOiXdyZ8EfGmC2.04xs/IBCRxK2IF4N9m',
                'remember_token' => '',
                'created_at' => '2024-04-01 11:42:27',
                'updated_at' => '2024-04-01 11:43:06',
                'is_verified' => 1,
                'role' => 'user',
            ),
            9 => 
            array (
                'id' => 19,
                'name' => 'vansh',
                'email' => 'vansh@gmail.com',
                'email_verified_at' => '2024-04-01 12:35:00',
                'password' => '$2y$12$Zvo/xeH.CDNH1AS0DpJTUuGW/jDcOFha654HqFzIs6pkTGiOi1xfi',
                'remember_token' => '',
                'created_at' => '2024-04-01 12:34:40',
                'updated_at' => '2024-04-01 12:35:00',
                'is_verified' => 1,
                'role' => 'user',
            ),
            10 => 
            array (
                'id' => 20,
                'name' => 'ad',
                'email' => 'admin99@gmail.com',
                'email_verified_at' => '2024-04-01 12:42:02',
                'password' => '$2y$12$F.K2vca7MnnsW8RJ7oHjwe1wHwC5Z6dHD9RP/1qR4OL6MbAC4Y7tm',
                'remember_token' => '',
                'created_at' => '2024-04-01 12:41:41',
                'updated_at' => '2024-04-01 12:42:02',
                'is_verified' => 1,
                'role' => 'user',
            ),
            11 => 
            array (
                'id' => 21,
                'name' => 'adminx',
                'email' => 'adminx@gmail.com',
                'email_verified_at' => '2024-04-01 12:56:26',
                'password' => '$2y$12$w.aLGgbVkPYjmGJ3.EePbexgsbGK4nBc.LPkMkX0gDVsW.s1nu7K2',
                'remember_token' => '',
                'created_at' => '2024-04-01 12:56:11',
                'updated_at' => '2024-04-01 12:56:26',
                'is_verified' => 1,
                'role' => 'user',
            ),
            12 => 
            array (
                'id' => 22,
                'name' => 'vansg12',
                'email' => 'vb@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$PpMyaVoGXO1KnNTEvCXwE.Gt.oPiX6It2VLp1bfBLC6wZuiUspyPW',
                'remember_token' => 'IeM5PpBaGONl8LBEhxeDJWZ6PqujIovx81FBRpEG',
                'created_at' => '2024-04-01 12:57:49',
                'updated_at' => '2024-04-01 12:57:55',
                'is_verified' => 0,
                'role' => 'user',
            ),
            13 => 
            array (
                'id' => 23,
                'name' => 'shruti',
                'email' => 'shruti@gmail.com',
                'email_verified_at' => '2024-05-09 12:12:34',
                'password' => '$2y$12$IbpiZRKZ.SRTej2YkkJsoO4qiNe3YMAuIVhORcUTqztxujyyAYl0e',
                'remember_token' => '',
                'created_at' => '2024-05-09 12:12:09',
                'updated_at' => '2024-05-09 12:12:34',
                'is_verified' => 1,
                'role' => 'user',
            ),
            14 => 
            array (
                'id' => 24,
                'name' => 'gomsi',
                'email' => 'gomsi@gmail.com',
                'email_verified_at' => '2024-05-13 05:01:25',
                'password' => '$2y$12$vVsxrC4mxvX9654QP3CfCuZEYlX7U6C6RWG3TvCXFXYWvVS7VfLA.',
                'remember_token' => '',
                'created_at' => '2024-05-13 05:00:36',
                'updated_at' => '2024-05-13 05:01:25',
                'is_verified' => 1,
                'role' => 'admin',
            ),
        ));
        
        
    }
}