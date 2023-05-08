<?php

require "config.php";

use App\Pet;

try {
	pet::register('Tommy', 'male', '2017-06-03', 'Inah', 'Inah@gmail.com', 'Bamban San Nicolas', '0939 345 3414');
	echo "<li>Added 1 pet";

	$pets = [
		[
			'name' => 'Coco',
			'gender' => 'Male',
			'birthdate' => '2012-06-12',
			'owner' => 'Chels',
			'email' => 'Chelsa@rocketmail.com',
			'address' => 'Balibago Pampangga',
			'contact_number' => '0934 123 4445'
		],
		[
			'name' => 'Hector',
			'gender' => 'Male',
			'birthdate' => '2017-12-12',
			'owner' => 'Uncle Jerry',
			'email' => 'Signian@jerrymail.com',
			'address' => 'Elenes Angeles',
			'contact_number' => '0929 331 7421'
		],
		[
			'name' => 'Seven',
			'gender' => 'Male',
			'birthdate' => '2008-08-04',
			'owner' => 'Jiro',
			'email' => 'Jiro@gmail.com',
			'address' => 'San Nicolas Bamban',
			'contact_number' => '0939 321 3113'
		]
	];
	Pet::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

