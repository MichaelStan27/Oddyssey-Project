<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Game::insert([
            [
                'title' => 'Elden Ring',
                'category_id' => 1,
                'description' => 'Elden Ring is an action role-playing game developed by FromSoftware and published by Bandai Namco Entertainment. The game was directed by Hidetaka Miyazaki and made in collaboration with fantasy novelist George R. R. Martin, who provided material for the game setting.',
                'price' => 150,
                'image' => 'ELDEN RING',
                'img_count' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Apex Legends',
                'category_id' => 2,
                'description' => 'Apex Legends is a free-to-play battle royale-hero shooter game developed by Respawn Entertainment and published by Electronic Arts. It was released for Microsoft Windows, PlayStation 4, and Xbox One in February 2019, for Nintendo Switch in March 2021, and for PlayStation 5 and Xbox Series X/S in March 2022',
                'price' => 0,
                'image' => 'Apex Legends',
                'img_count' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Back 4 Blood',
                'category_id' => 2,
                'description' => 'Back 4 Blood is a 2021 first-person shooter game developed by Turtle Rock Studios and published by Warner Bros. Interactive Entertainment',
                'price' => 699,
                'image' => 'Back 4 Blood',
                'img_count' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'For Honor',
                'category_id' => 1,
                'description' => 'For Honor is a 2017 action video game developed and published by Ubisoft for Microsoft Windows, PlayStation 4, and Xbox One. The game allows players to play the roles of historical forms of soldiers and warriors such as knights, samurai, vikings, controlled using a third-person perspective. The game was developed primarily by Ubisoft Montreal and released worldwide in 2017.',
                'price' => 200,
                'image' => 'For Honor',
                'img_count' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Soulcalibur VI',
                'category_id' => 3,
                'description' => 'Soulcalibur VI is a fighting game developed by Bandai Namco Studios and published by Bandai Namco Entertainment for the PlayStation 4, Xbox One, and Microsoft Windows in 2018. It is the seventh main installment in the Soulcalibur series.',
                'price' => 250,
                'image' => 'SOULCALIBUR VI',
                'img_count' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'God of War',
                'category_id' => 5,
                'description' => 'God of War is an action-adventure game franchise created by David Jaffe at Sony\'s Santa Monica Studio. It began in 2005 on the PlayStation 2 video game console, and has become a flagship title for the PlayStation brand, consisting of ten games across multiple platforms with an eleventh currently in development.',
                'price' => 700,
                'image' => 'God of War',
                'img_count' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Sekiro: Shadows Die Twice',
                'category_id' => 5,
                'description' => 'Sekiro: Shadows Die Twice is a 2019 action-adventure game developed by FromSoftware and published by Activision. The game follows a shinobi known as Wolf as he attempts to take revenge on a samurai clan who attacked him and kidnapped his lord.',
                'price' => 750,
                'image' => 'Sekiro Shadows Die Twice',
                'img_count' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Red Dead Redemption 2',
                'category_id' => 5,
                'description' => 'Red Dead Redemption 2 is a 2018 action-adventure game developed and published by Rockstar Games. The game is the third entry in the Red Dead series and is a prequel to the 2010 game Red Dead Redemption.',
                'price' => 640,
                'image' => 'Red Dead Redemption 2',
                'img_count' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Street Fighter V',
                'category_id' => 3,
                'description' => 'Street Fighter V is a fighting game developed by Capcom and Dimps and published by Capcom for the PlayStation 4 and Microsoft Windows in 2016. Similar to the previous games in the Street Fighter series, Street Fighter V features a side-scrolling fighting gameplay system.',
                'price' => 150,
                'image' => 'Street Fighter V',
                'img_count' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Mafia: Definitive Edition',
                'category_id' => 5,
                'description' => 'Mafia: Definitive Edition is a 2020 action-adventure game developed by Hangar 13 and published by 2K Games. It is a remake of the 2002 video game Mafia, and the fourth main installment in the Mafia series.',
                'price' => 480,
                'image' => 'Mafia Definitive Edition',
                'img_count' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Cyberpunk 2077',
                'category_id' => 1,
                'description' => 'Cyberpunk 2077 is an action role-playing video game developed and published by CD Projekt. The story takes place in Night City, an open world set in the Cyberpunk universe',
                'price' => 700,
                'image' => 'Cyberpunk 2077',
                'img_count' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'FIFA 22',
                'category_id' => 4,
                'description' => 'FIFA 22 is a football simulation video game published by Electronic Arts. It is the 29th installment in the FIFA series, and was released worldwide on 1 October 2021 for Microsoft Windows, Nintendo',
                'price' => 650,
                'image' => 'FIFA 22',
                'img_count' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'NBA 2K22',
                'category_id' => 4,
                'description' => 'NBA 2K22 is a 2021 basketball simulation video game developed by Visual Concepts and published by 2K Sports, based on the National Basketball Association. It is the 23rd installment in the NBA 2K franchise and the successor to NBA 2K21',
                'price' => 650,
                'image' => 'NBA 2K22',
                'img_count' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Tekken 7',
                'category_id' => 3,
                'description' => 'Tekken 7 is a fighting game developed and published by Bandai Namco Entertainment. It is the seventh main and ninth overall installment in the Tekken series. Tekken 7 had a limited arcade release in March 2015.',
                'price' => 400,
                'image' => 'Tekken 7',
                'img_count' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Guilty Gear Strive',
                'category_id' => 3,
                'description' => 'Guilty Gear Strive is a fighting video game developed and published by Arc System Works. It is the seventh mainline installment of the Guilty Gear series, and the 25th overall. The game was released worldwide on June 11, 2021. It uses Unreal Engine 4.',
                'price' => 700,
                'image' => 'Guilty Gear Strive',
                'img_count' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
