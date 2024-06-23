<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    public function run(): void
    {
        $userData=[
            [
                'name'=>'Admin',
                'email'=>'Admin@gmail.com',
                'role'=>'Admin',
                'password'=>bcrypt(12345)

            ],
            [
                'name'=>'User',
                'email'=>'User@gmail.com',
                'role'=>'User',
                'password'=>bcrypt(12345)

            ],
        ];
        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
