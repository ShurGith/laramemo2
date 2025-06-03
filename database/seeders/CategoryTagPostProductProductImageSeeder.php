<?php

namespace Database\Seeders;

use App\Models\CategoryTagPostProductProductImage;
use Illuminate\Database\Seeder;

class CategoryTagPostProductProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryTagPostProductProductImage::factory()->count(5)->create();
    }
}
