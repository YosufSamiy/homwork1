<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\offices::class, function (Faker $faker) {
    return [

        'cod'=>$faker->randomNumber(),
        'city'=>$faker->city,
        'phone'=>$faker->phoneNumber,
        'address1'=>$faker->address,
        'address2'=>$faker->address,
        'state'=>$faker->state,
        'country'=>$faker->century,
        'PostalCode'=>$faker->randomNumber(),
        'territory'=>$faker->randomNumber()



    ];
});
