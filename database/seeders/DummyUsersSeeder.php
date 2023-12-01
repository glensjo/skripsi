<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name'=>'Mas Admin',
                'email'=>"admin@gmail.com",
                'role'=>'admin',
                'password'=>md5('admin')
            ],
            [
                'name'=>'Mas User',
                'email'=>"user@gmail.com",
                'role'=>'user',
                'password'=>md5('123456')
            ],
        ];
        foreach($userData as $key => $val){
            User::create($val);
        };
    }
}
