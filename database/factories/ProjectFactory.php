<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
  return [
    'title'                 => ucfirst($faker->words(2)),
    'description'           => ucfirst($faker->text(50)),
    'platform_id'           => $faker->numberBettween(1,3),
    'development_status_id' => $faker->numberBettween(1,6)
  ];
});
