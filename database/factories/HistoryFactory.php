<?php

namespace Database\Factories;

use App\Models\Submission;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\History>
 */
class HistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $submission = Submission::factory();
        // https://laravel.com/docs/10.x/eloquent-factories#defining-relationships-within-factories
        return [
            'submission_id' => $submission,
            'user_id' => fn (array $attributes) => Submission::find($attributes['submission_id'])
                ->user_id,
            'status_id' => fn (array $attributes) => Submission::find($attributes['submission_id'])
                ->status_id,
            'comments' => fake()->text,
        ];
    }
}
