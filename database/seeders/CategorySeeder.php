<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create([
            'name' => 'web design',
            'slug' => 'web-design',
            'color' => 'red'
        ]);

        Category::create([
            'name' => 'Ui Ux',
            'slug' => 'Ui-Ux',
            'color' => 'green'
        ]);

        Category::create([
            'name' => 'Mechine Learning',
            'slug' => 'Mechine-Learning',
            'color' => 'blue'
        ]);

        Category::create([
            'name' => 'Cloud Computing',
            'slug' => 'Cloud-COmputing',
            'color' => 'yellow'
        ]);

    }
}
