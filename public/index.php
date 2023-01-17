<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$smarty = new Smarty();
$smarty->setTemplateDir(__DIR__.'/../views/templates/');
$smarty->setCompileDir(__DIR__.'/../views/templates_c/');
$smarty->setConfigDir(__DIR__.'/../views/configs/');
$smarty->setCacheDir(__DIR__.'/../views/cache/');

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) use ($smarty) {
    $smarty->assign('name', 'Epsom');
    $smarty->display('index.tpl');
    $response->getBody()->write("");
    return $response;
});

$app->run();

