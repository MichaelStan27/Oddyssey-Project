<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Review::insert([
            [
                'user_id' => '1',
                'game_id' => '1',
                'review' => 'gamenya bagus sekali mantap',
                'recommend' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '1',
                'game_id' => '1',
                'review' => 'gamenya bagus',
                'recommend' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '1',
                'game_id' => '1',
                'review' => 'gamenya seru si mantap',
                'recommend' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '1',
                'game_id' => '2',
                'review' => 'gamenya seru banget',
                'recommend' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '1',
                'game_id' => '4',
                'review' => 'gamenya seru bingits',
                'recommend' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '1',
                'game_id' => '4',
                'review' => 'gamenya seru deh mantap jd rekom',
                'recommend' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '1',
                'game_id' => '6',
                'review' => 'gamenya seru abis',
                'recommend' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '1',
                'game_id' => '5',
                'review' => 'gamenya seru mau direkom ke teman',
                'recommend' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '1',
                'game_id' => '5',
                'review' => 'gamenya bosenin',
                'recommend' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
