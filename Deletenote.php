<?php
include "include/connection.php";
$Note_id=$_GET['id'];

$q="DELETE FROM note WHERE id=$Note_id";
$conn->exec($q);

header("location:user.php");
