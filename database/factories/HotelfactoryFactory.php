<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HotelfactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>$this->fake()->name(),
            'adress' =>$this->fake()->adress(),
            'description' =>$this->fake()->description(),
            'description' =>$this->fake()->description(),
            // 'category_id' =>App\models Category::Factory
        ];
    }
}
