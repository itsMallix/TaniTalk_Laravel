<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class dummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Pak petani',
                'email'=>'petani@gmail.com',
                'role'=>'petani',
                'password'=>bcrypt('12345')
            ],
            [
                'name'=>'Pak pengelola',
                'email'=>'pengelola@gmail.com',
                'role'=>'pengelola',
                'password'=>bcrypt('12345')
            ],
            [
                'name'=>'Pak pengguna',
                'email'=>'pengguna@gmail.com',
                'role'=>'pengguna',
                'password'=>bcrypt('12345')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
