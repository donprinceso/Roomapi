<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Categories;
use App\Model\Roomservice;
use Faker\Generator as Faker;

$factory->define(Roomservice::class, function (Faker $faker) {
    return [
        'room_no'=>$faker->numberBetween(1,30),
        'size'=>$faker->numberBetween(30,50),
        'price'=>$faker->numberBetween(1000,9000),
        'category'=>function ()
        {
            return Categories::all()->random();
        }
    ];
});
