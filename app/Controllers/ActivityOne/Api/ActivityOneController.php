<?php

namespace App\Controllers\ActivityOne\Api;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ActivityOneController{

    public function __invoke(Request $request, Response $response, $args)
    {
        $response->getBody()->write("Hello world from API");
        return $response;
    }

}

?>