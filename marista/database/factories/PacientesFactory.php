<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Models\paciente::class, function (Faker $faker) {
    return [
        'nombres'=>$faker->name,
        'apaterno'=>$faker->sentence(1,false),
        'amaterno'=>$faker->sentence(1,false),
        'edad'=> rand(10,50),
        'curp'=>Str::random(10),
        'nacionalidad'=>'Mexicana',
        'edo_civil'=>'s',
        'ocupacion'=>$faker->sentence(3),
        'calle'=>$faker->sentence(2),
        'colonia'=>$faker->sentence(2),
        'codigo_postal'=>rand(10000,99999),
        'ciudad'=>$faker->sentence(1, false),
        'estado'=>'Morelia',
        'num_tel'=>'4430000000',
        'num_cel'=>'4430000000',
        'religion'=>'católica',
        'familiar_a_cargo'=>$faker->name,

    ];
});
