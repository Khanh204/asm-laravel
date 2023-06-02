<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->name(),
            "age"=>random_int(10,50),
            "address"=>$this->faker->text(2000),
            "telephone"=>random_int(10,20)
        ];
    }
}
