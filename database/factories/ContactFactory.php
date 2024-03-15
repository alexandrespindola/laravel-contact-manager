<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'contact' => $this->faker->unique()->randomNumber(9, true),
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
