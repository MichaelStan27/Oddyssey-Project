<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Transaction::insert([
            [
                'user_id' => 2,
                'game_id' => 31,
                'purchased_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 2,
                'game_id' => 15,
                'purchased_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 2,
                'game_id' => 3,
                'purchased_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 2,
                'game_id' => 10,
                'purchased_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 2,
                'game_id' => 27,
                'purchased_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 3,
                'game_id' => 27,
                'purchased_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 3,
                'game_id' => 31,
                'purchased_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 3,
                'game_id' => 3,
                'purchased_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 3,
                'game_id' => 30,
                'purchased_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'game_id' => 30,
                'purchased_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'game_id' => 31,
                'purchased_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'game_id' => 27,
                'purchased_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
