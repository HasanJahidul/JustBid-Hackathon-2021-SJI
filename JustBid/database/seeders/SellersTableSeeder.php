<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SellersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
         DB::table('seller')->insert([
            'id' => 1,
            'name'=>'Borno',
            'email' => 'Borno@gmail.com',
            'phone' => '01749449840',
            'nid' => '021556231321',
            'type' => 'seller',
            'password' => '12345678',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
