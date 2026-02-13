<?php

use app\controllers\ApiExampleController;
use app\controllers\LoginController;
use app\middlewares\SecurityHeadersMiddleware;
use flight\Engine;
use flight\net\Router;

/** 
 * @var Router $router 
 * @var Engine $app
 */

// This wraps all routes in the group with the SecurityHeadersMiddleware
$router->group('', function(Router $router) use ($app) {

	$router->get('/', function() use ($app) {
		$app->render('index');
	});

	$router->get('/login', function() use ($app) {
		(new LoginController($app))->show();
	});

	$router->post('/login', function() use ($app) {
		(new LoginController($app))->submit();
	});
	
}, [ SecurityHeadersMiddleware::class ]);