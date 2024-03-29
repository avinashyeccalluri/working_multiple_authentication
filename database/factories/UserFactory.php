<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Book;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Book::class,function(Faker $faker){
    return[
        'Book_Name'=>$faker->name,
        'Book_Author'=>$faker->name,
        'Qunatity_Available'=>$faker->numberBetween(0,12),
        'Price'=>$faker->numberBetween(100,250),
    ];
});
