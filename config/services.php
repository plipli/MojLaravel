<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => [
		'domain' => '',
		'secret' => '',
	],

	'mandrill' => [
		'secret' => '',
	],

	'ses' => [
		'key' => '',
		'secret' => '',
		'region' => 'us-east-1',
	],

	'stripe' => [
		'model'  => 'User',
		'secret' => '',
	],
	
	'google' => [
		'client_id' => '1090412339951-30oldhgk16ne7amoqobkokgiro8eg3a0.apps.googleusercontent.com',
		'client_secret' => 'ZDyDkzxAsL4PBX3n1wctvfvL',
		'redirect' => 'http://localhost:8000/auth/google/callback',
	],
	
	'flickr' => [
		'client_id' => 'a42d4f2a6fd3f3971d84602a9af87b16',
		'client_secret' => '4aac4dfa4d7ab1ed',
		'redirect' => 'http://localhost:8000/auth/flickr/callback',
	],
	
	
];
