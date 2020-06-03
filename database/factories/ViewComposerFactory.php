<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ViewComposer;
use Faker\Generator as Faker;

$factory->define(ViewComposer::class, function (Faker $faker) {
    return [
        'name'  => $faker->word
    ];
});
