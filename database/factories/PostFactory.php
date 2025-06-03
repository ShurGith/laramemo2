<?php
    
    namespace Database\Factories;
    
    use App\Models\Post;
    use App\Models\User;
    use Illuminate\Database\Eloquent\Factories\Factory;
    
    class PostFactory extends Factory
    {
        /**
         * The name of the factory's corresponding model.
         *
         * @var string
         */
        protected $model = Post::class;
        
        /**
         * Define the model's default state.
         */
        public function definition(): array
        {
            return [
              'title' => fake()->sentence(4),
              'slug' => fake()->slug(),
              'content' => fake()->paragraphs(3, true),
                //  'image_url' => fake()->imageUrl(640, 480), // Especifica ancho y alto
              'published_at' => fake()->dateTime(),
              'user_id' => User::factory(),
            ];
        }
    }
