<?php

namespace Database\Factories;

use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Submission>
 */
class SubmissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'status_id' => '',
            'type' => fake()->randomElement(['Leave', 'Permit', 'Sick']),
            'attachment' => 'attachments/' . str::random(40) . '.jpg',
        ];
    }

    public function pending(): static
    {
        return $this->state(fn (array $attributes)=> ['status_id'=> Status::PENDING['id']]);
    }
    public function approved(): static
    {
        return $this->state(fn (array $attributes)=> ['status_id'=> Status::APPROVED['id']]);
    }
    public function rejected(): static
    {
        return $this->state(fn (array $attributes)=> ['status_id'=> Status::REJECTED['id']]);
    }
}
