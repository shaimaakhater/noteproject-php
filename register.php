<?php include('include/connection.php');
session_start();

$user_id=$_SESSION['user_id'];

$sql = $conn->prepare("SELECT * 
from users WHERE id=?");
    $sql->execute(array($user_id));
    $row = $sql->fetch();


?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="include/style.css">
</head>
<body class="bg">
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="registeraction.php">
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="">
		</div>
		
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<?php 
        if($row['role']==1){

        

		echo"<div class='input-group'>
			<label>Role</label>
		</div>";
		echo"<div class='box'>

			<select name='Role'>
				<option value='0'>Select role:</option>
				<option value='1'>admin</option>
				<option value='2'>user</option>
			</select>
		</div>";
		}
		?>

		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>