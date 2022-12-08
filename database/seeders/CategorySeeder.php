<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'category' => 'music',
                'description' => 'music',
            ],
            [
                'category' => 'business',
                'description' => 'business',
            ],
            [
                'category' => 'technology',
                'description' => 'technology',
            ],
            [
                'category' => 'social',
                'description' => 'social',
            ],
            [
                'category' => 'agriculture',
                'description' => 'agriculture',
            ],
            [
                'category' => 'education',
                'description' => 'education',
            ],
            [
                'category' => 'charity',
                'description' => 'charity',
            ],
            [
                'category' => 'social',
                'description' => 'social',
            ],
            [
                'category' => 'art',
                'description' => 'art',
            ],
            [
                'category' => 'health-and-fitness',
                'description' => 'health-and-fitness',
            ],
        ]);
    }
}
