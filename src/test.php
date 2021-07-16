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


header('Access-Control-Allow-Origin: *');
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require '../vendor/autoload.php';

$app = AppFactory::create();
$db = getDB();

$app->get('/', function (Request $request, Response $response, $args) {
$response->getBody()->write("Hello world!");
return $response;
});

$app->get('/class', function (Request $request, Response $response, $args) {
$response->getBody()->write("Hello world! class");
return $response;
});

$app->get('/qcm',
function (Request $request, Response $response, $args) use ($db) {

$result = $db->query('Select * from qcm');
$donnees = $result->fetchAll(PDO::FETCH_ASSOC);
//echo json_encode($donnees);
$response->getBody()->write(json_encode($donnees));
return $response;
});



$app->run();

function getDB() {
$dsn = 'mysql:dbname=tp_angular;host=127.0.0.1';
$user = 'root';
$password = 'root';
$db = new PDO($dsn, $user, $password);
return $db;
}

