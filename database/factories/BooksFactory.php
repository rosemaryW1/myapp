<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Books;

class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    
protected $model = Books::class;
    public function definition()
    {
       
        return [
            "Book_name" =>$this->faker->word(),
            "ISBN_NO" =>$this->faker->randomNumber(8,true),
            "Y_O_Pub" =>$this->faker->year(),
            //
        ];
    }
}
