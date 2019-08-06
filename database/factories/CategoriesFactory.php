<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Categories;
use Faker\Generator as Faker;

$factory->define(Categories::class, function (Faker $faker) {
    return [
        'name'=>$faker->word
    ];
});
