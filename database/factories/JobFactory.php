<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Job;
use App\Skill;
use App\Employer;
use Faker\Generator as Faker;

$factory->define(Job::class, function (Faker $faker) {
    return [
        'title' => $faker->jobTitle,
        'salary' => $faker->randomNumber(5),
        'description' => $faker->randomHtml(),
        'contract_type' => $faker->word(),
        'skill_id' => function(){
            return factory(Skill::class)->create()->id;
        },
        'employer_id' => function(){
            return factory(Employer::class)->create();
        }
    ];
});
