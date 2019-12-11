<?php include('include/connection.php') ?>
<?php include('include/nav.php') ?>
<?php

$sql = $conn->prepare("SELECT * 
from note where user_id=$user_id");
$sql->execute();
$rows = $sql->fetchAll();

//print_r($rows);


?>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
	<link rel="stylesheet" type="text/css" href="include/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body class="bg">

<div class="container">
  <div class="row">
  
<?php
                 foreach ($rows as $row){
     echo "<div class='col-sm-4'>";
     echo "<h2 class='text-danger'>" .$row['title']."</h2>";
     echo "<h4 class='text-success'>" .$row['content']."</h4>";
     echo "<h4 class='text-success'>" .$row['time']."</h4>";
     echo "<h4 class='text-success'>" .$row['day']."</h4>";
     echo "<a  class='btn btn-danger' href='updatenote.php?id=$row[id]'>Edit</a>";
     echo "    ";
     echo "<a  class='btn btn-danger' href='Deletenote.php?id=$row[id]'>Delete</a>";


      echo "</div>";
  }               
  ?>
  </div>
 </div>
  

</body>
</html>