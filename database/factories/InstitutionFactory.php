<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Institution>
 */
class InstitutionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->word(50);   //Genera 50 palabras aleatorias y sólo toma una. Lo vamos a llamar 100 veces
                                                    //Faker es el que trae las palabras
        return [
            'name' => $name
        ];
    }
}
