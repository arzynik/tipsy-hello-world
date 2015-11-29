<?php

require_once __DIR__ . '/vendor/autoload.php';

$hello = new Tipsy\Tipsy;

$hello->router()
	->home(function() {
		echo 'Hello world!';
	})
	->otherwise(function() {
		echo '404';
	});

$hello->run();
