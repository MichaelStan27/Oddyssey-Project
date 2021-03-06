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
                'game_id' => '19',
                'review' => 'gamenya bagus sekali mantap',
                'recommend' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '2',
                'game_id' => '19',
                'review' => 'gamenya bagus grafik oke',
                'recommend' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '3',
                'game_id' => '19',
                'review' => 'gamenya seru si mantap',
                'recommend' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '1',
                'game_id' => '10',
                'review' => 'gamenya seru banget',
                'recommend' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '2',
                'game_id' => '10',
                'review' => 'gamenya mirip seperti kartunnya',
                'recommend' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '3',
                'game_id' => '10',
                'review' => 'agak kurang menurutku karena kurang storyline',
                'recommend' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '2',
                'game_id' => '7',
                'review' => 'abis liat dari youtuber keren bang',
                'recommend' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '1',
                'game_id' => '7',
                'review' => 'gamenya seru mau direkom ke teman',
                'recommend' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '3',
                'game_id' => '7',
                'review' => 'gamenya bosenin',
                'recommend' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '2',
                'game_id' => '9',
                'review' => 'gamenya seru bikin senam jantung',
                'recommend' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '3',
                'game_id' => '9',
                'review' => 'gamenya seru lawan zombie',
                'recommend' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '2',
                'game_id' => '5',
                'review' => 'gamenya kurang hype g ada temen',
                'recommend' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '3',
                'game_id' => '5',
                'review' => 'gamenya oke la mayan seru',
                'recommend' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
