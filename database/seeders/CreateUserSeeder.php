<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin: userLevel =0, lecturer: userLevel=3, student: userLevel=5
        $users = [
            [
                'name'=>'Admin User',
                'email'=>'admin@uniten.edu.my',
                'password'=> bcrypt('password'),
                'user_level' => 0
            ],
            [
                'name'=>'Manager User',
                'email'=>'manager1@itms.uniten.edu.my',
                'password'=> bcrypt('password'),
                'user_level' => 1
            ],
            [
                'name'=>'Lead Developer User',
                'email'=>'developer1@itms.uniten.edu.my',
                'password'=> bcrypt('password'),
                'user_level' => 2
            ],
            [
                'name'=>'Developer User',
                'email'=>'developer2@itms.uniten.edu.my',
                'password'=> bcrypt('password'),
                'user_level' => 3
            ],
            [
                'name'=>'Bunit User',
                'email'=>'bunit1@uniten.edu.my',
                'password'=> bcrypt('password'),
                'user_level' => 4
            ],
        ];
        // foreach item in the $users array (above), create user
        foreach ($users as $key => $user) {
            User::create($user);
        }

    }
}
