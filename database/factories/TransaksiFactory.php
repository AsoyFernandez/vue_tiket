<?php

use Faker\Generator as Faker;
use App\Tiket;
$factory->define(App\Transaksi::class, function (Faker $faker) {
    return [
        'tiket_id'=>function ()
        {
        	return Tiket::all()->random();
        },
        'qty' =>rand(1,30),
        'status' => rand(0,1),
    ];
});
