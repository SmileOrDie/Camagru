<?php
	// var_dump($_POST);
	echo "<br>";
	if (empty($_POST['name']) == FALSE && empty($_POST['password']) == FALSE)
		echo "YES FORMULAIRE POST";
	else
	{
?>
<html>
<head>
	<title>Camagru</title>
	<link rel="stylesheet" type="text/css" href="front.css">
</head>
<body style="background-color:darkgrey;">
	<font  face="purisa" color="#6C0000">
		<h1><center><a href="index.php">Camagru</a></center></h1>
	</font> 
	<div id="retour">
		<form action="<?php echo $_SERVER['HTTP_REFERER'];?>"  method="post">
			<div id="coucou">
				<center><font color="white"><?php 
				if (empty($_POST['name']) == TRUE)
					echo "Name ";
				if (empty($_POST['password']) == TRUE)
					echo " Password ";
				echo "is empty!";
				?></font></center>
			</div>
			<div id="div_input">
			<input type="submit" value="Retour">

			</div>
		</form>
	</div>
</body>
<?php
	}
?>
</html>