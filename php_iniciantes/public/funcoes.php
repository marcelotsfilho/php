<?php

function connection(){
    $pdo = new PDO('mysql:host=localhost;dbname=trainup', 'root', 'm.filho48');
    return $pdo; 
}

function getData($table){
    $connection = connection();
    $query = $connection->query("SELECT * FROM $table");
    return $query->fetchAll();
}

var_dump(getData('users'));