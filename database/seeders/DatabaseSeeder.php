<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\User;

use App\Models\Category;
use App\Models\Review;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        User::create([
            'name' => 'Michael Daniel',
            'email' => 'test@gmail.com',
            'password' => Hash::make('123')
        ]);

        Category::insert([
            [
                'name' => 'Action RPG',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Shooter',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Fighting',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sport and Racing',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Adventure',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);

        Game::insert([
            [
                'title' => 'Elden Ring',
                'category_id' => 1,
                'description' => 'Elden Ring is an action role-playing game developed by FromSoftware and published by Bandai Namco Entertainment. The game was directed by Hidetaka Miyazaki and made in collaboration with fantasy novelist George R. R. Martin, who provided material for the game setting.',
                'price' => 100,
                'image' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Apex Legends',
                'category_id' => 2,
                'description' => 'Apex Legends is a free-to-play battle royale-hero shooter game developed by Respawn Entertainment and published by Electronic Arts. It was released for Microsoft Windows, PlayStation 4, and Xbox One in February 2019, for Nintendo Switch in March 2021, and for PlayStation 5 and Xbox Series X/S in March 2022',
                'price' => 0,
                'image' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Back 4 Blood',
                'category_id' => 2,
                'description' => 'Back 4 Blood is a 2021 first-person shooter game developed by Turtle Rock Studios and published by Warner Bros. Interactive Entertainment',
                'price' => 699,
                'image' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);

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
                'review' => 'gamenya jelek susah bgt',
                'recommend' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '1',
                'game_id' => '2',
                'review' => 'susah banget toxic community',
                'recommend' => false,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
