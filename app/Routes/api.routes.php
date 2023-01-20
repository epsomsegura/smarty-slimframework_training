<?php
declare(strict_types=1);

use Slim\Routing\RouteCollectorProxy;

$app->group('/api',function(RouteCollectorProxy $api){

    // Hello World API
    $api->get('/', \App\Controllers\ActivityOne\Api\ActivityOneController::class);

});

