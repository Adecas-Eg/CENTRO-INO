<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(99)->create();

        User::created([
            'name'=> "Adrian Castro",
            'email'=> "matiose12@gmail.com",
            'password'=> bcrypt('password')
        ]);
    }
}
