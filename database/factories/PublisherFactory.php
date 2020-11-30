<?php
# @Date:   2020-11-30T14:44:42+00:00
# @Last modified time: 2020-11-30T15:17:32+00:00




namespace Database\Factories;

use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;

class PublisherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Publisher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'name' => $this->faker->company,
          'address' => $this->faker->address

        ];
    }
}
