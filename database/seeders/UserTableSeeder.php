<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create ([

            'name'=>'user',
            'email'=>'user@gmail.com',
            'contact'=>'contact',
            'address'=>'address',
            'role'=>'role',
            'status'=>'active',
            'password'=>bcrypt('1234567'),
            'imageNid'=>'imageNid',
            'nid'=>123456789




        ]);
    }
}
