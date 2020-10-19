<?php

use App\Models\Produto;
use Faker\Generator as Faker;

$factory->define(App\Produto::class, function (Faker $faker){

    return[
        'nome'=>$faker->unique()->name,
        'preco'=>$faker->RandomFloat(2),
        'estoque'=>$faker->randomNumber($nbDigits = 2)
    ];   
});
