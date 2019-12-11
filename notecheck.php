<?php

//print_r($_POST);
include "include/connection.php";
$Title=$_POST['Title'];
$Day=$_POST['Day'];
$Time=$_POST['Time'];
$comment=$_POST['comment'];
session_start();

$user_id=$_SESSION['user_id'];


$q="INSERT INTO 
note(title,content,time,day,user_id)
values('$Title','$comment','$Time','$Day','$user_id') 
";
$conn->exec($q);
header("location:user.php");








