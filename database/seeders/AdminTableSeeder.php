<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create ([

            'name'=>'midula',
            'email'=>'admin@gmail.com',
            'contact'=>'contact',
            'address'=>'address',
            'role'=>'admin',
            'status'=>'active',
            'password'=>bcrypt('123456')




        ]);
    }
}
