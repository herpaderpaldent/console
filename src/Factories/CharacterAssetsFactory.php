<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 20.10.2018
 * Time: 13:54
 */

use Faker\Generator as Faker;
use Seat\Eveapi\Models\Assets\CharacterAsset;

$factory->define(CharacterAsset::class, function (Faker $faker) {
    return [
        'item_id' => $faker->unique()->numberBetween(100000000000,110000000000),
        'type_id' => $faker->randomElement([17366,606,34590]),
        'quantity' => $faker->randomNumber(),
        'location_id' => $faker->randomElement([60003760,60007693,60008494,60014803]),
        'location_type' => 'station',
        'location_flag' => 'Hangar',
        'is_singleton' => $faker->boolean($chanceOfGettingTrue = 10),
        'name'            => $faker->name
    ];
});
