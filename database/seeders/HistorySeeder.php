<?php

namespace Database\Seeders;

use App\Models\History;
use App\Models\Status;
use App\Models\Submission;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->callOnce([
            StatusSeeder::class,
        ]);

        self::pendingHistory();
        sleep(5);

        self::approvedHistories();
        sleep(5);

        self::rejectedHistories();
        sleep(5);
    }

    public static function pendingHistory()
    {
        // submission containt 1 pending history
        $pending = Submission::factory()->pending()->create();
        History::factory()->state([
            'submission_id' => $pending->id,
            'user_id' => $pending->user_id,
            'status_id' =>  Status::PENDING['id'],
        ])->create();
    }

    public static function approvedHistories()
    {
        // submission containts 2 histories ( 1 pending & 1 approved)
        $approved = Submission::factory()->approved()->create();
        // User for approved status
        $approver = User::factory()->approver()->create();
        History::factory()
            ->count(2)
            ->state(new Sequence(
                [
                    'submission_id' => $approved->id,
                    'user_id' => $approved->id,
                    'status_id' => Status::PENDING['id'],
                ],
                [
                    'submission_id' => $approved->id,
                    'user_id' => $approver->id,
                    'status_id' => Status::APPROVED['id'],
                ],
            ))->create();
    }

    public static function rejectedHistories()
    {
        // submission containts 2 histories ( 1 pending & 1 rejected)
        $rejected = Submission::factory()->rejected()->create();
        // User for rejected status
        $rejectee = User::factory()->approver()->create();
        History::factory()
            ->count(2)
            ->state(new Sequence(
                [
                    'submission_id' => $rejected->id,
                    'user_id' => $rejected->user_id,
                    'status_id' => Status::PENDING['id'],
                ],
                [
                    'submission_id' => $rejected->id,
                    'user_id' => $rejectee->id,
                    'status_id' => Status::REJECTED['id'],
                ],
            ))->create();
    }
}
