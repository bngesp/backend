<?php
/**
 * donnees.php
 * Created by Bassirou NGOM.
 * User: bngesp <https://github.com/bngesp>
 * Licence: MIT
 * Date: 16/07/2021
 * Time: 09:24
 * Email: bassiroungom@esp.sn
 */

$dsn = 'mysql:dbname=tp_angular;host=127.0.0.1';
$user = 'root';
$password = 'root';

$db = new PDO($dsn, $user, $password);
$result = $db->query('Select * from qcm');
//echo '<pre>';
//var_dump($result->fetchAll(PDO::FETCH_ASSOC));
//echo '</pre>';
$donnees = $result->fetchAll(PDO::FETCH_ASSOC);

header('Access-Control-Allow-Origin: *');
echo json_encode($donnees);
