<?php




use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {
    return [
       'title' => $faker->sentence($nbWords = 6, $variableNWords = true),
        'body' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    ];
});
