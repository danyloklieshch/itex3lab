<?php
header('Content-Type: text/plain');
$data=[
    //"prof"=>$_POST['prof'],
    "name2"=>$_POST['name2'],
    "name3"=>$_POST['name3']
];
//$link=new PDO('mysql:host=localhost;dbname=workers','root','');
$connection=new PDO('mysql:host=localhost;dbname=workers','root','');
$sql = "SELECT projects.manager, work.FID_Worker ,work.time_start ,work.time_end FROM department,work,projects WHERE name=:name2 AND FID_Worker=:name3";
$statement = $connection->prepare($sql);
$result = $statement->execute($data);

$arPosts = '';
if ($result) {
    //$rows =$statement->rowCount($statement); // количество полученных строк

    if ($result) {
        //$rows =$statement->rowCount($statement); // количество полученных строк

        while($row =$statement -> fetch()){
            echo $row['manager'] . '&nbsp;'   ;
            echo $row['FID_Worker'] . '&nbsp;'   ;
            echo $row['time_start'] . '&nbsp;'  ;
            echo $row['time_end'] . '&nbsp;'  . '</br>' ;

            //var_dump($row);
        }



        //echo join($arPosts);
    }
}


//$result = $statement->execute($data);s
//var_dump($row);
