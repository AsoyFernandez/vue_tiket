<?php

use Faker\Generator as Faker;

$factory->define(App\Categori::class, function (Faker $faker) {
	$word = $faker->word;
    return [
        'name_categori'=>$word,
    ];
});
