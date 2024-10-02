<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserDocumentFactory extends Factory
{
    public function definition()
    {
        return [
            'url' => fake()->url(),
        ];
    }
}