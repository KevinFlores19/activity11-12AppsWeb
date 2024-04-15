<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
            'name'              =>  'Kevin',
            'email'             =>  'kflores@tecmilenio.mx',
            'password'          =>  Hash::make('tecmilenio2024'),
            'email_verified_at' =>  now()
        ]);
    }
}