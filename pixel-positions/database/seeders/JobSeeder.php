<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory(4)->create();
        $jobs = Job::factory(20)->hasAttached($tags)->create();
        $jobs->random(3)->each(function (Job $job) {
            $job->update(['featured' => true]);
        });
    }
}
