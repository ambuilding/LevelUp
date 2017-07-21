<?php

$factory('App\User', [
	'name' => $faker->name,
	'email' => $faker->email,
	//'password' => bcrypt($faker->word)
	'password' => $faker->word
]);

$factory('App\Post', [
	'user_id' => 'factory:App\User',
	'title' => $faker->sentence,
	'body' => $faker->paragraph
]);

$factory('App\Comment', [
	'post_id' => 'factory:App\User',
	'body' => $faker->paragraph
]);