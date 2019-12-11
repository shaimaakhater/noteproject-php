<?php

//print_r($_POST);
include "include/connection.php";
$username=$_POST['username'];
$password=$_POST['password'];
$Role=$_POST['Role'];

$q="INSERT INTO 
users(name,password,role)
values('$username',md5('$password'),'$Role') 
";
$conn->exec($q);
header("location:login.php");









