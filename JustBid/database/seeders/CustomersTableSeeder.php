<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'id' => 1,
            'name'=>'Jahidul Hasan',
            'email' => 'joy@gmail.com',
            'type' => 'customer',
            'password' => '1234567',
            'phone' => '01749569840',
            'nid' => '0215561321',
            'created_at' => now(),
            'updated_at' => now()
        ]);
         DB::table('customers')->insert([
            'id' => 2,
            'name'=>'Borno',
            'email' => 'Borno@gmail.com',
            'phone' => '01749449840',
            'nid' => '021556231321',
            'type' => 'agent',
            'password' => '12345678',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
