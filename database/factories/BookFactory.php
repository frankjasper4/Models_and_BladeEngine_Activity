<?php

namespace Database\Factories;

use App\Models\Book;
use Faker\Factory as Faker;
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
        $faker = Faker::create();

        return [
            'title' => $faker->sentence,
            'author' => $faker->name,
            'isbn' => $faker->isbn13,
            'description' => $faker->paragraph,
        ];
    }
}