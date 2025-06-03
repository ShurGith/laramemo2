<?php
    
    namespace Database\Seeders;
    
    use App\Models\Category;
    use App\Models\Post;
    use App\Models\Product;
    use App\Models\ProductImage;
    use App\Models\Tag;
    use App\Models\User;
    use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    
    class DatabaseSeeder extends Seeder
    {
        /**
         * Seed the application's database.
         */
        public function run(): void
        {
            
            User::factory()->create([
              'name' => 'Test User',
              'email' => 'test@example.com',
            ]);
            Tag::factory(10)->create();
            Category::factory(10)->create();
            ProductImage::factory(10)->create();
            Product::factory(10)->create();
            Post::factory(10)->create();
            //  User::factory(10)->create();
        }
    }
