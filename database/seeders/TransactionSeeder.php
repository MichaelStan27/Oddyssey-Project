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
                'game_id' => 17,
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
                'game_id' => 15,
                'purchased_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 3,
                'game_id' => 19,
                'purchased_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 3,
                'game_id' => 15,
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
                'game_id' => 19,
                'purchased_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'game_id' => 19,
                'purchased_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'game_id' => 17,
                'purchased_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'game_id' => 18,
                'purchased_at' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
