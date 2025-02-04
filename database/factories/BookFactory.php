<?php
# @Date:   2020-11-30T14:43:46+00:00
# @Last modified time: 2020-11-30T15:19:46+00:00




namespace Database\Factories;

use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->catchPhrase,
              'author'=> $this->faker->name,
                'year'=> $this->faker->year($max = 'now'),
                  'isbn'=> $this->faker->unique()->isbn13,
                  'price'=> $this->faker->randomFloat(2,5,100),
                  'publisher_id' => Publisher::factory()

        ];
    }
}
