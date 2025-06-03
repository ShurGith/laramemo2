<?php
    
    namespace Database\Factories;
    
    use App\Models\Category;
    use App\Models\Product;
    use App\Models\User;
    use Illuminate\Database\Eloquent\Factories\Factory;
    
    class ProductFactory extends Factory
    {
        /**
         * The name of the factory's corresponding model.
         *
         * @var string
         */
        protected $model = Product::class;
        
        /**
         * Define the model's default state.
         */
        public function definition(): array
        {
            return [
              'name' => fake()->name(),
              'slug' => fake()->slug(),
              'description' => fake()->text(),
              'price' => fake()->randomFloat(2, 0, 999999.99),
              'stock' => fake()->numberBetween(-10000, 10000),
              'main_image' => fake()->imageUrl(640, 480), // Especifica ancho y alto
              'user_id' => User::factory(),
              'category_id' => Category::factory(),
            ];
        }
    }
