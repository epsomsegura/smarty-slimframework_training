<?php

namespace App\Controllers\HelloWorld\Web;

use Config\SmartyTemplates;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class IndexController{

    public $smarty;

    public function __construct()
    {
        $this->smarty = new SmartyTemplates();
    }
    
    public function __invoke(Request $request, Response $response, array $args)
    {
        $response->getBody()->write("");
        $this->smarty->display('index.tpl');
        return $response;
    }

}

?>