<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" href="include/style.css">

</head>
<body class="bg">
<div class="header">
		<h2>My Note</h2>
	</div>
	
	<form method="post" action="notecheck.php">
		<div class="input-group">
			<label>Title</label>
			<input type="text" name="Title" >
		</div>
		<div class="input-group">
			<label>Day</label>
			<input type="date" name="Day">
		</div>
        <div class="input-group">
			<label>Time</label>
			<input type="Time" name="Time">
		</div>
        <div class="input-group">
			<label>what you will do ?</label>
			<textarea class="form-control" rows="5" name="comment"></textarea>

		</div>
    
		<div class="input-group">
			<button type="submit" class="btn" name="add_note">ADD</button>
		</div>
		<p>
			let's me  member you  <a href="user.php">My Note</a>
		</p>
	</form>

</body>
</html>