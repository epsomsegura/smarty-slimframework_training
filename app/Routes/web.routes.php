<?php
declare(strict_types=1);

use Slim\Routing\RouteCollectorProxy;

$app->group('',function(RouteCollectorProxy $web){

    // Hello World API
    $web->get('/', \App\Controllers\HelloWorld\Web\IndexController::class);
    
    // Activity one
    $web->get('/activity-1[/{name}]', \App\Controllers\ActivityOne\Web\ActivityOneController::class);

});