<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;

class RandomJobSeeder extends Seeder
{
    public function run(): void
    {
        Job::factory()->count(10)->create();

        echo "Jobs created successfully!";
    }
}
