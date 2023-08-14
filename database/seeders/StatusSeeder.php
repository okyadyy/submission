<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Status::factory()->create(Status::PENDING);
        // Status::factory()->create(Status::APPROVED);
        // Status::factory()->create(Status::REJECTED);

        Status::factory()->pending()->create();
        Status::factory()->approved()->create();
        Status::factory()->rejected()->create();


    }
}
