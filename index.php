<!DOCTYPE html>

<html>
<head>
	<title>Camagru</title>
	<link rel="stylesheet" type="text/css" href="front.css">
</head>
<body style="background-color:darkgrey;">
	<div id="header">
		<font face="purisa" color="#6C0000">
			<h1><center href="index.php">Camagru</center></h1>
		</font> 
	</div>
<!-- 	<?php
		var_dump($_POST);
		if (isset($_POST['name']))
			echo "YES";
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
	 ?> -->
	<br>
	<div id="main">
		<form action="user.php"  method="post">
 			<br>Name: <input type="text" name="name"><br>
 			Password: <input type="password" name="password"><br>
<!--  			E-mail: <input type="email" name="email"><br> -->
  			<input type="submit" value="Log in"> 
		

		</form>
			<form action="new_user.php"  method="post">
			<input type="submit" value="Sign in">
		</form>
	</div>
	<div id="side">
		<?php 
		echo "<p><br>test</p>";
		?>
	</div>

</body>
	
</html>