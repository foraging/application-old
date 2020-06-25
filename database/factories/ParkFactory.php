<?php

use App\Models\Park;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

/** @var Factory $factory */
$factory->define(Park::class, function (Faker $faker) {
    $images = [
        'https://upload.wikimedia.org/wikipedia/commons/a/a9/Parc_Cwm_Darren_-_geograph.org.uk_-_625351.jpg',
        'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Mam_Tor.jpg/150px-Mam_Tor.jpg',
        'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Scafells.jpg/150px-Scafells.jpg',
        'https://upload.wikimedia.org/wikipedia/commons/thumb/6/60/Llyn_Llydaw_from_Crib_Goch_2.jpg/150px-Llyn_Llydaw_from_Crib_Goch_2.jpg',
        'https://media-cdn.tripadvisor.com/media/photo-o/09/b6/85/a1/parc-penallta.jpg',
        'https://www.visit-hampshire.co.uk/imageresizer/?image=%2fdmsimgs%2fWellington_Country_Park_771332940.jpg&action=ProductDetail',
        'https://i1.trekearth.com/photos/8137/_dsc5670-3.jpg',
    ];

    return [
        'slug' => $faker->slug,
        'name' => $faker->firstName.' '.$faker->lastName,
        'description' => $faker->sentence(300),
        'image' => $images[array_rand($images)],
        'website' => mt_rand(0, 10) > 5 ? $faker->url : null,
    ];
});
