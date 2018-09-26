<?php

$link = 'mysql:host=localhost;dbname=orlandoe_api';
$usuario = 'orlandoe_admin';
$pass = '4815162342elsersupremo';

try{

    $pdo = new PDO($link,$usuario,$pass);

    //echo 'Conectado';

}catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
