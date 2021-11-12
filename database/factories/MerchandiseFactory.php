<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Merchandise;
use Faker\Generator as Faker;

$factory->define(Merchandise::class, function (Faker $faker) {
    return [
        'product_name'=> $faker->word,
        'brand_name'=>$faker->word,
        'retail_price' => rand(2, 250),
        'wholesale_price' => rand(22, 650),
        'wholesale_qty' => rand(6, 50),
        'qty_stock' => rand(6, 50),
        'unit_id' => rand(1, 4),
        'category_id' => rand(1, 4),
    ];
});
