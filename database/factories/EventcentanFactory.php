<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Eventcentan;
use Faker\Generator as Faker;

$factory->define(Eventcentan::class, function (Faker $faker) {
    return [
        'hall_no'=>$faker->numberBetween(1,5),
        'size'=>$faker->numberBetween(50,100),
        'capacity'=>$faker->numberBetween(100,1000),
        'price'=>$faker->numberBetween(1000,90000)
    ];
});
