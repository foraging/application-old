<?php

use App\Models\Animal;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

/** @var Factory $factory */
$factory->define(Animal::class, function (Faker $faker) {
    $images = [
        'https://www.treeguideuk.co.uk/wp-content/uploads/2017/10/oak-english-6.jpg',
        'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b0/Corylus_avellana_0001.JPG/1280px-Corylus_avellana_0001.JPG',
        'https://media.nature.com/w700/magazine-assets/d41586-019-03614-0/d41586-019-03614-0_17409632.jpg',
        'https://www.gardeningknowhow.com/wp-content/uploads/2009/03/blackberries1-400x317.jpg',
        'https://cdn.britannica.com/62/154162-050-8E68A2FB/Garden-strawberries.jpg',
        'http://media.cleveland.com/insideout_impact/photo/10881341-large.jpg',
        'http://theherbexchange.com/wp-content/uploads/2019/10/ginger-plant.jpg',
    ];

    return [
        'slug' => $faker->slug,
        'name' => $faker->firstName.' '.$faker->lastName,
        'description' => $faker->sentence(300),
        'image' => $images[array_rand($images)],
    ];
});
