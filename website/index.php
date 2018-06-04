<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->get('/', function(){

	echo "Hello Page";
});

$app->get('/hello/:name', function ($name) {

    echo "Hello, " . $name;
});

$app->run();

?>