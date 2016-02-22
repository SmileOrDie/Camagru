<!DOCTYPE html>
<html>
<head>
	<title>Camagru</title>
	<link rel="stylesheet" type="text/css" href="front.css">
</head>
<body style="background-color:darkgrey;">
	<div id="header" 
		<font  face="purisa" color="#6C0000">
			<h1><center><a href="index.php">Camagru</a></center></h1>
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
		<form action="mail.php"  method="post">
 			<br>Name: <input type="text" placeholder=
 			<?php
 			if (empty($_POST['name']) == TRUE)
					echo "Name";
			else
					echo $_POST['name'];
 			?>><br>
 			Password: <input type="password" placeholder=<?php
 			if (empty($_POST['password']) == TRUE)
					echo "Password";
			else
					echo $_POST['password'];
 			?>><br>
 			E-mail: <input type="email" name="email">
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