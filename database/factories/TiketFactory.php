<?php

use Faker\Generator as Faker;
use App\Categori;
$factory->define(App\Tiket::class, function (Faker $faker) {
    $word = $faker->word;
    return [
        'name_tiket'=>$word,
        'harga_tiket' => rand(1,1000),
        'jumlah_tiket' => rand(1,30),
        'categori_id' => function ()
        {
        	return Categori::all()->random();
        },
        'jenis_tiket' => $word,
    ];
});
