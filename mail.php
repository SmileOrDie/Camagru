
<?php
  echo  '<h1><center><a href="index.php">Camagru</a></center></h1>' ;
  $to  = $_POST['email'];
  $subject = 'Confimed e-mail';
  $message = 'test';
  mail($to, $subject, $message);
  echo  '<br><center><a href="index.php">confirmed e-mail sended</a></center>' ;
?>
<!-- <html>
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
        <center><font color="white">e-mail - send -</font></center>
      </div>
      <div id="div_input">
      <input type="submit" value="Retour">
      </div>
    </form>
  </div>
</body>
</html> -->