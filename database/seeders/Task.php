<?php

namespace Database\Seeders;

use App\Models\Task as ModelsTask;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Task extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsTask::factory()->count(20)->create();
    }
}
