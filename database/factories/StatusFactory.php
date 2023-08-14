<?php

namespace Database\Factories;

use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Status>
 */
class StatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return fake()->randomElement([
            Status::PENDING, Status::APPROVED, Status::REJECTED
        ]);
    }

    public function pending(): static
    {
        return $this->state(function (array $attributes){
            return Status::PENDING;
        });
    }

    public function approved(): static
    {
        return $this->state(fn (array $attributes)=> Status::APPROVED);
    }

    public function rejected(): static
    {
        return $this->state(fn (array $attributes)=> Status::REJECTED);
    }
}
