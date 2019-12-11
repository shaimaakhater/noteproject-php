<?php
include "include/connection.php";
$Note_id=$_GET['id'];

$sql=$conn->prepare("SELECT * FROM note 
WHERE id=$Note_id");
$sql->execute();
$row=$sql->fetch();

?>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="include/style.css">

</head>
<body class="bg">
<div class="header">
		<h2>My Note</h2>
	</div>

	<form method="post" action="Update.php">
    <input type="hidden" name="note_id" value="<?php echo $row['id'] ?>">

		<div class="input-group">
			<label>Title</label>
			<input type="text" name="Title" value="<?php echo $row['title'] ?>" >
		</div>
		<div class="input-group">
			<label>Day</label>
			<input type="date" name="Day" value="<?php echo $row['day'] ?>">
		</div>
        <div class="input-group">
			<label>Time</label>
			<input type="Time" name="Time" value="<?php echo $row['time'] ?>">
		</div>
        <div class="input-group">
			<label>what you will do ?</label>
			<input  name="comment" value="<?php echo $row['content'] ?>">

		</div>
    
		<div class="input-group">
			<button type="submit" class="btn" name="add_note">Update</button>
		</div>
	
	</form>







