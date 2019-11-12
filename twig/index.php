<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../users.php';

$loader = new Twig_Loader_Filesystem(__DIR__ . DIRECTORY_SEPARATOR . 'tpl');
$twig = new Twig_Environment($loader);

echo $twig->render('main.tpl', [
	'data_users' => Users::getRandomData(),
	'data_users_json' => json_encode(Users::getRandomData()),
]);