<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
                "name" => $this->faker->name,
                "city" => $this->faker->city,
                "born" => $this->faker->born,
                "salary" => $this->faker->salary
                
            
        ];
    }
}
