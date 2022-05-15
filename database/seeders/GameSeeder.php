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
                'price' => 150000,
                'image' => 'ELDEN RING',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Apex Legends',
                'category_id' => 2,
                'description' => 'Apex Legends is a free-to-play battle royale-hero shooter game developed by Respawn Entertainment and published by Electronic Arts. It was released for Microsoft Windows, PlayStation 4, and Xbox One in February 2019, for Nintendo Switch in March 2021, and for PlayStation 5 and Xbox Series X/S in March 2022',
                'price' => 0,
                'image' => 'Apex Legends',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Back 4 Blood',
                'category_id' => 2,
                'description' => 'Back 4 Blood is a 2021 first-person shooter game developed by Turtle Rock Studios and published by Warner Bros. Interactive Entertainment',
                'price' => 699000,
                'image' => 'Back 4 Blood',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'For Honor',
                'category_id' => 1,
                'description' => 'For Honor is a 2017 action video game developed and published by Ubisoft for Microsoft Windows, PlayStation 4, and Xbox One. The game allows players to play the roles of historical forms of soldiers and warriors such as knights, samurai, vikings, controlled using a third-person perspective. The game was developed primarily by Ubisoft Montreal and released worldwide in 2017.',
                'price' => 200000,
                'image' => 'For Honor',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Soulcalibur VI',
                'category_id' => 3,
                'description' => 'Soulcalibur VI is a fighting game developed by Bandai Namco Studios and published by Bandai Namco Entertainment for the PlayStation 4, Xbox One, and Microsoft Windows in 2018. It is the seventh main installment in the Soulcalibur series.',
                'price' => 250000,
                'image' => 'SOULCALIBUR VI',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'God of War',
                'category_id' => 5,
                'description' => 'God of War is an action-adventure game franchise created by David Jaffe at Sony\'s Santa Monica Studio. It began in 2005 on the PlayStation 2 video game console, and has become a flagship title for the PlayStation brand, consisting of ten games across multiple platforms with an eleventh currently in development.',
                'price' => 700000,
                'image' => 'God of War',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Sekiro: Shadows Die Twice',
                'category_id' => 5,
                'description' => 'Sekiro: Shadows Die Twice is a 2019 action-adventure game developed by FromSoftware and published by Activision. The game follows a shinobi known as Wolf as he attempts to take revenge on a samurai clan who attacked him and kidnapped his lord.',
                'price' => 750000,
                'image' => 'Sekiro Shadows Die Twice',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Red Dead Redemption 2',
                'category_id' => 5,
                'description' => 'Red Dead Redemption 2 is a 2018 action-adventure game developed and published by Rockstar Games. The game is the third entry in the Red Dead series and is a prequel to the 2010 game Red Dead Redemption.',
                'price' => 640000,
                'image' => 'Red Dead Redemption 2',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Street Fighter V',
                'category_id' => 3,
                'description' => 'Street Fighter V is a fighting game developed by Capcom and Dimps and published by Capcom for the PlayStation 4 and Microsoft Windows in 2016. Similar to the previous games in the Street Fighter series, Street Fighter V features a side-scrolling fighting gameplay system.',
                'price' => 150000,
                'image' => 'Street Fighter V',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Mafia: Definitive Edition',
                'category_id' => 5,
                'description' => 'Mafia: Definitive Edition is a 2020 action-adventure game developed by Hangar 13 and published by 2K Games. It is a remake of the 2002 video game Mafia, and the fourth main installment in the Mafia series.',
                'price' => 480000,
                'image' => 'Mafia Definitive Edition',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Cyberpunk 2077',
                'category_id' => 1,
                'description' => 'Cyberpunk 2077 is an action role-playing video game developed and published by CD Projekt. The story takes place in Night City, an open world set in the Cyberpunk universe',
                'price' => 700000,
                'image' => 'Cyberpunk 2077',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'FIFA 22',
                'category_id' => 4,
                'description' => 'FIFA 22 is a football simulation video game published by Electronic Arts. It is the 29th installment in the FIFA series, and was released worldwide on 1 October 2021 for Microsoft Windows, Nintendo',
                'price' => 650000,
                'image' => 'FIFA 22',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'NBA 2K22',
                'category_id' => 4,
                'description' => 'NBA 2K22 is a 2021 basketball simulation video game developed by Visual Concepts and published by 2K Sports, based on the National Basketball Association. It is the 23rd installment in the NBA 2K franchise and the successor to NBA 2K21',
                'price' => 650000,
                'image' => 'NBA 2K22',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Tekken 7',
                'category_id' => 3,
                'description' => 'Tekken 7 is a fighting game developed and published by Bandai Namco Entertainment. It is the seventh main and ninth overall installment in the Tekken series. Tekken 7 had a limited arcade release in March 2015.',
                'price' => 400000,
                'image' => 'Tekken 7',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Guilty Gear Strive',
                'category_id' => 3,
                'description' => 'Guilty Gear Strive is a fighting video game developed and published by Arc System Works. It is the seventh mainline installment of the Guilty Gear series, and the 25th overall. The game was released worldwide on June 11, 2021. It uses Unreal Engine 4.',
                'price' => 700000,
                'image' => 'Guilty Gear Strive',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Dota 2',
                'category_id' => 6,
                'description' => 'Dota 2 is a multiplayer online battle arena video game developed and published by Valve. The game is a sequel to Defense of the Ancients, which was a community-created mod for Blizzard Entertainment\'s Warcraft III: Reign of Chaos.',
                'price' => 0,
                'image' => 'Dota 2',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Battle of Heroes 3',
                'category_id' => 6,
                'description' => 'The hero acts as a mercenary who is sent to the border of the kingdom. Use combat and magic skills, explore the fantasy world, develop a hero and warriors, towers, aura, magic, weapons. Explore and create magical items. Grow a dragon or a cerberus.',
                'price' => 55000,
                'image' => 'Battle of Heroes 3',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'MotoGP™22',
                'category_id' => 7,
                'description' => 'Engines running: give the green light to the most immersive and authentic MotoGP™ gaming experience ever. Virtual and Real have never been so near in MotoGP™22!',
                'price' => 400000,
                'image' => 'MotoGP™22',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Retrowave',
                'category_id' => 7,
                'description' => 'Neon lights, palm trees, synthwave, \'80s supercars speeding down an endless highway... Welcome to the world of Retrowave!',
                'price' => 25000,
                'image' => 'Retrowave',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'NEON SPEED',
                'category_id' => 7,
                'description' => 'NEON SPEED is a casual racing game.You need to ride on a high speed between another cars on the road and earn points to improve your car later.You can choose the best car that will absolutely fits you!',
                'price' => 53000,
                'image' => 'NEON SPEED',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Omega Pilot',
                'category_id' => 7,
                'description' => 'Omega Pilot is an exciting first-person VR racing game with realistic physics and control mechanics. Compete for in-ring races with other pilots in asynchronous multiplayer and enjoy the view from the cockpit at high speed!',
                'price' => 96000,
                'image' => 'Omega Pilot',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'WWE 2K22',
                'category_id' => 4,
                'description' => 'REDESIGNED ENGINE. NEW CONTROLS. ALL THE FEATURES YOU CAN HANDLE. Get ripped out of the stands and hit with complete control of the WWE Universe. Hitting this hard has never been so easy. WWE 2K22: IT HITS DIFFERENT',
                'price' => 659000,
                'image' => 'WWE 2K22',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Out of the Park Baseball 23',
                'category_id' => 4,
                'description' => 'Play What The Pros Play! Officially licensed by MLB, the MLB Players Inc. and KBO, Out of the Park Baseball 23 is the newest in the award-winning sports strategy series. A sports fan’s dream come true - and the only game ever to win Metacritic PC Game of the Year Award TWICE.',
                'price' => 170000,
                'image' => 'Out of the Park Baseball 23',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Subnautica',
                'category_id' => 8,
                'description' => 'Descend into the depths of an alien underwater world filled with wonder and peril. Craft equipment, pilot submarines and out-smart wildlife to explore lush coral reefs, volcanoes, cave systems, and more - all while trying to survive.',
                'price' => 140000,
                'image' => 'Subnautica',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => '7 Days to Die',
                'category_id' => 8,
                'description' => '7 Days to Die is an open-world game that is a unique combination of first-person shooter, survival horror, tower defense, and role-playing games. Play the definitive zombie survival sandbox RPG that came first. Navezgane awaits!',
                'price' => 120000,
                'image' => '7 Days to Die',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Tin Can',
                'category_id' => 8,
                'description' => 'You\'ve barely managed to escape your exploding spaceship. Now in an old escape pod, you hurtle through space at the mercy of the cosmos. With no knowledge of the pod’s complex systems, your life depends on a technical manual and your own wits. How long can you survive?',
                'price' => 110000,
                'image' => 'Tin Can',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Nomad Survival',
                'category_id' => 8,
                'description' => 'Battle against hordes of enemies, conquer Boss encounters, and explore various character and skill combinations in this time-based auto-attacking Roguelite in your quest to become stronger and defeat the most menacing of creatures that lay in wait at the end of each run.',
                'price' => 25000,
                'image' => 'Nomad Survival',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Turbo Overkill',
                'category_id' => 2,
                'description' => 'Johnny Turbo needs to clean up Paradise, a cyber city overrun by augmented minions under the cult control of the world\'s most advanced AI, Syn, who\'s looking to expand to world domination if not stopped here and now. Wall-running, Turbo Time, chain saw leg augments, flying cars and lots of booms.',
                'price' => 110000,
                'image' => 'Turbo Overkill',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Hell Let Loose',
                'category_id' => 2,
                'description' => 'Join the ever expanding experience of Hell Let Loose - a hardcore World War Two first person shooter with epic battles of 100 players with infantry, tanks, artillery, a dynamically shifting front line and a unique resource based RTS-inspired meta-game.',
                'price' => 250000,
                'image' => 'Hell Let Loose',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Neptunia x SENRAN KAGURA: Ninja Wars',
                'category_id' => 1,
                'description' => 'Neptunia and SENRAN KAGURA join forces in this hack \'n slash RPG! Pair up 10 playable characters to slice through enemy hordes, channel the elements, and perform special character attacks. Then find your center with the Peaches & Cream Meditation minigame before taking on the post-game challenges of Yomi-Training!',
                'price' => 210000,
                'image' => 'Neptunia x SENRAN KAGURA Ninja Wars',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Yu-Gi-Oh! Master Duel',
                'category_id' => 9,
                'description' => 'The definitive digital edition of the competitive card game that has been evolving for over 20 years! Duel at the highest level against Duelists all over the world.',
                'price' => 0,
                'image' => 'Yu-Gi-Oh! Master Duel',
                'img_sliders' => 'img_1.jpg,img_2.jpg,img_3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
