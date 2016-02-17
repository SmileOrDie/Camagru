<!DOCTYPE html>
<html>
<head>
	<title>Camagru</title>
	<link rel="stylesheet" type="text/css" href="front.css">
</head>
<body style="background-color:darkgrey;">
	<div id="header">
		<font face="purisa" color="#6C0000">
			<h1><center>Camagru</center></h1>
		</font> 
	</div>
	<?php
		var_dump($_POST);
		if (isset($_POST['name']))
			echo "YES FORUMULAIRE POST"
	?>
	<br>
	<pre><?php print_r($_SERVER);
	?></pre>
	<?php 
		var_dump($_GET)
	?>
	<?php 
		echo "<p>". $_POST['name'] ."</p>";
		echo "<p>". $_POST['password'] ."</p>" 
	 ?>
	<br>
	<div id="main">
		<form action="user.php"  method="post">
 			name: <input type="text" name="name"><br>
 			password: <input type="text" name="password">
  			<input type="submit" value="Submit">
		</form>
		<div id="side">
		<?php 

		echo "<p>test</p>";
		?>
		</div>

	</div>

</body>
	
</html>