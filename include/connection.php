

<?php
$username="root";
$password="";
$dns="mysql:host=databasetest;dbname=databasetest";
$sql1="SET NAMES UTF8";
$sql2="CHARACTER SET utf8";
try{

    $conn=new PDO($dns,$username,$password);
  //  echo "connected !";
   $conn->exec($sql1);
    $conn->exec($sql2);
}
catch (PDOException $e){
  echo $e->getMessage();
}


