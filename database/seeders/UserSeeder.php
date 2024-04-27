<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => bcrypt('password'),
            'points' => 100,
        ]);
        User::create([
            'name' => 'Joo Sae-hyuk',
            'email' => 'tom@example.com',
            'password' => bcrypt('password'),
            'points' => 100,
        ]);
        User::create([
            'name' => 'Hyun Jung-hwa',
            'email' => 'hyun@example.com',
            'password' => bcrypt('password'),
            'points' => 100,
        ]);

    }
}
