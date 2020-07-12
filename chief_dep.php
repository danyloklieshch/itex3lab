<?php

$data=[
    //"prof"=>$_POST['prof'],
    "name1"=>$_POST['name1']
];
//$link=new PDO('mysql:host=localhost;dbname=workers','root','');
$connection=new PDO('mysql:host=localhost;dbname=workers','root','');
$sql = "SELECT department.chief, worker.ID_Worker ,work.time_start ,work.time_end FROM worker,department,work WHERE chief=:name1";
$statement = $connection->prepare($sql);
$result = $statement->execute($data);

$arPosts = array();
if ($result) {
    //$rows =$statement->rowCount($statement); // количество полученных строк

        while($row =$statement -> fetchAll()){
            $arPosts= $row;
        }

    echo json_encode($arPosts);
    }


//$result = $statement->execute($data);s
//var_dump($result);