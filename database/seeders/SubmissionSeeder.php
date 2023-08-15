<?php

namespace Database\Seeders;

use App\Models\Status;
use App\Models\Submission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Submission::factory()->pending()->create();
            Submission::factory()->approved()->create();
            Submission::factory()->rejected()->create();
    }
}
