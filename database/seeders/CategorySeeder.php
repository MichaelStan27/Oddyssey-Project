<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
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
                'name' => 'Sport',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Adventure',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'MOBA',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Racing',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
