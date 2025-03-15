<?php

use App\Models\Employer;
use App\Models\Job;

it('belongs to employer', function () {

    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    expect($job->employer()->is($employer))->toBe(true);
});

it('can have tags', function () {
   $job = Job::factory()->create();
   $job->tag('BackEnd');
   expect($job->tags)->toHaveCount(1);
});
