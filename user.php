<?php
		var_dump($_POST);
		echo "<br>";
		if (empty($_POST['name']) == FALSE)
			echo "YES FORMULAIRE POST";
		else
			print_r($_SERVER['HTTP_REFERER']);
?>