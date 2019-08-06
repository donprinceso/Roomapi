<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Staff;
use Faker\Generator as Faker;

$factory->define(Staff::class, function (Faker $faker) {
    static $password;
    return [
        'name'=> $faker->name,
        'password'=>$password ?: $password=bcrypt('secret')
    ];
});
