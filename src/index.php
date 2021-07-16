<?php
/**
 * index.php
 * Created by Bassirou NGOM.
 * User: bngesp <https://github.com/bngesp>
 * Licence: MIT
 * Date: 16/07/2021
 * Time: 11:49
 * Email: bassiroungom@esp.sn
 */

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require '../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$app->run();
