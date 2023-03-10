<?php

namespace App\Controllers\ActivityOne\Web;

use Config\SmartyTemplates;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ActivityOneController{

    public $smarty;

    public function __construct()
    {
        $this->smarty = new SmartyTemplates();
    }
    
    public function __invoke(Request $request, Response $response, array $args)
    {
        $response->getBody()->write("");
        if(array_key_exists('name',$args)){
            $this->smarty->assign('name',$args['name']);
        }
        $this->smarty->display('activity-one/index.tpl');
        return $response;
    }

}

?>