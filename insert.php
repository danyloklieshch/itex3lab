<?php

$data=[
    //"prof"=>$_POST['prof'],
    "value1"=>$_POST['value1'],
    "value2"=>$_POST['value2'],
    "name"=>$_POST['name']
];
    $connection=new PDO('mysql:host=localhost;dbname=workers','root','');

    $sql = "UPDATE work SET time_start=:value1, time_end=:value2 WHERE FID_Projects=:name";
    $statement = $connection->prepare($sql);
    $result = $statement->execute($data);
    var_dump($result);
