<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Kategori;
use App\Produk;
use App\Pelanggan;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Kategori::class, function (Faker $faker) {
    return [
        'nama' => $faker->name,
    ];
});

$factory->define(Produk::class, function (Faker $faker) {
    return [
        'id_kategori' => $faker->numberBetween(1,7),
        'nama' => $faker->name,
        'harga' => $faker->randomNumber,
    ];
});

$factory->define(Pelanggan::class, function (Faker $faker) {
    return [
        'nama' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'no_hp' => $faker->phoneNumber,
        'alamat' => $faker->address,
    ];
});
