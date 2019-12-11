<?php
include "include/connection.php";

$note_id=$_POST['note_id'];
$Title=$_POST['Title'];
$Day=$_POST['Day'];
$Time=$_POST['Time'];
$comment=$_POST['comment'];


$q="UPDATE note  set title='$Title'
,day='$Day' ,time='$Time',content='$comment' WHERE 'id=$note_id'";
$conn->exec($q);
header("location:user.php");

//print_r($note_id);

