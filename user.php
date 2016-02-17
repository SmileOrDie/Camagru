<?php
	// var_dump($_POST);
	echo "<br>";
	if (empty($_POST['name']) == FALSE)
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
	<div id="retour">
		<form action="<?php echo $_SERVER['HTTP_REFERER'];?>"  method="post">
			<div id="coucou"></div>
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