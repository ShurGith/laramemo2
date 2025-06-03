<?php
    
    namespace Database\Factories;
    
    use App\Models\Product;
    use App\Models\ProductImage;
    use Illuminate\Database\Eloquent\Factories\Factory;
    
    class ProductImageFactory extends Factory
    {
        /**
         * The name of the factory's corresponding model.
         *
         * @var string
         */
        protected $model = ProductImage::class;
        
        /**
         * Define the model's default state.
         */
        public function definition(): array
        {
            return [
              'product_id' => Product::factory(),
              'image_url' => fake()->imageUrl(640, 480), // Especifica ancho y alto
              'caption' => fake()->word(),
              'order' => fake()->numberBetween(-10000, 10000),
            ];
        }
    }
