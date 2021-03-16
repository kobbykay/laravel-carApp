<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {

        DB::table('users')->insert([


            [

               'name'=>'Admin Kesse',

               'email'=>'admin@admin.com',

                'is_admin'=>'1',

               'password'=> bcrypt('admin'),

            ],

            [

               'name'=>'User Kesse',

               'email'=>'user@user.com',

                'is_admin'=>'0',

               'password'=> bcrypt('user'),

            ],

        ]);





    }
}
