<?php
session_start();

$user_id=$_SESSION['user_id'];

$sql = $conn->prepare("SELECT * 
from users WHERE id=?");
    $sql->execute(array($user_id));
    $row = $sql->fetch();


?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
  /*style nav*/
  body{  margin: 0;
    padding: 0;
  }
  ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:rgb(117, 11, 85) ;
  }
  
  ul.topnav li {float: left;}
  
  ul.topnav li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  ul.topnav li a:hover:not(.active) {background-color: rgb(245, 242, 79);}
  
  ul.topnav li a.active {background-color: rgb(245, 242, 79);}
  
  ul.topnav li.right {float: right;}
  
  @media screen and (max-width: 600px) {
    ul.topnav li.right, 
    ul.topnav li {float: none;}
  }
  /*footer*/
  .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: red;
      color: white;
      text-align: center;
   }
  
  
</style>
</head>
<body>

<ul class="topnav">
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="note.php">New Note</a></li>
<?php 
        if($row['role']==1){

  echo "<li><a href='register.php'>Add User</a></li>";
        }
?>
  <li class="right"><a href="logout.php">Log Out</a></li>
</ul>


</body>
</html>
