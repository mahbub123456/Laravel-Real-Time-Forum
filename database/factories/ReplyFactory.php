<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Reply::class, function (Faker $faker) {
    return [

        'body'=>$faker->sentence,
        'question_id'=>function(){
          return \App\Models\Question::all()->random();
        },
        'user_id'=>function(){
            return \App\User::all()->random();
        }

    ];
});
