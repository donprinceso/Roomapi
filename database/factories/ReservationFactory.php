<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Staff;
use App\Model\Reservation;
use App\Model\Roomservice;
use Faker\Generator as Faker;

$factory->define(Reservation::class, function (Faker $faker) {
    return [
        'staff_id'=>function ()
        {
            return Staff::all()->random();
        },
        'room_no'=>function ()
        {
            return Roomservice::all()->random();
        },
        'name'=>$faker->name,
        'phone'=>$faker->e164PhoneNumber,
        'duration'=>$faker->numberBetween(1,30),
        'check_in'=>$faker->dateTime,
        'check_out'=>$faker->dateTime,
        'price'=>$faker->numberBetween(1000,9000),
    ];
});
