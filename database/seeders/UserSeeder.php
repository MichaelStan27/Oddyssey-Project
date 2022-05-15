<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        User::insert([
            [
                'name' => 'Michael Daniel',
                'email' => 'test@gmail.com',
                'password' => Hash::make('12345678'),
                'is_admin' => true
            ],
            [
                'name' => 'Budi Setiawan',
                'email' => 'budi@gmail.com',
                'password' => Hash::make('23456789'),
                'is_admin' => false
            ],
            [
                'name' => 'Bambang Hartanto',
                'email' => 'bambang@gmail.com',
                'password' => Hash::make('01234567'),
                'is_admin' => false
            ],
        ]);
    }
}
