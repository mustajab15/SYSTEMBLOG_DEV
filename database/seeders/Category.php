<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Category::factory(3)->create();

        Category::create([
            'name' => 'web design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Ui Ux',
            'slug' => 'Ui-Ux'
        ]);

        Category::create([
            'name' => 'Mechine Learning',
            'slug' => 'Mechine-Learning'
        ]);

        Category::create([
            'name' => 'Cloud Computing',
            'slug' => 'Cloud-COmputing'
        ]);
    }
}
