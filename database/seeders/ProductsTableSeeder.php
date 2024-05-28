<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Laptop',
                'detail' => 'Dell',
                'created_at' => '2024-02-28 09:48:19',
                'updated_at' => '2024-02-28 09:48:19',
            ),
        ));
        
        
    }
}