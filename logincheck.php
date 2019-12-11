<?php
session_start();

if(!empty($_POST)) {

    include "include/connection.php";
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = $conn->prepare("SELECT * 
from users WHERE name=? AND password=?");
    $sql->execute(array($username, md5($password)));
    $row = $sql->fetch();
    $count=$sql->rowCount();
    if ($count>0){
        if($row['role']==0){
            $_SESSION['error_id']=$row['id'];
            header("location:error.php");
        }elseif($row['role']==1){
            $_SESSION['user_id']=$row['id'];
            header("location:admin.php");
        }else{
            $_SESSION['user_id']=$row['id'];
            header("location:user.php");
           // header("location:user.php?id=$row[id]");

        }



    }else{
        header("location:login.php");
    }

}
else{
    header("location:login.php");
}



