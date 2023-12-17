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
        User::create([
            'name'=>'Sebastian Sarmiento',
            'email'=>'sebastian@gmail.com',
            'password'=>bcrypt('88888888')
        ]);
        User::factory(99)->create();
    }
}
