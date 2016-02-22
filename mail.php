<?php
     $to  = 'smail.hamdani@gmail.com';
     echo $_POST['email'];
     $subject = 'Confimed e-mail';
     $message = '
     <html>
      <head>
       <title>Confirmed e-mail</title>
      </head>
      <body>
       <p>voila</p>
       <table>
        <tr>
         <th>Personne</th><th>Jour</th><th>Mois</th><th>Année</th>
        </tr>
        <tr>
         <td>Josiane</td><td>3</td><td>Août</td><td>1970</td>
        </tr>
        <tr>
         <td>Emma</td><td>26</td><td>Août</td><td>1973</td>
        </tr>
       </table>
      </body>
     </html>
     ';

     // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
     $headers  = 'MIME-Version: 1.0' . "\r\n";
     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

     // En-têtes additionnels
     $headers .= 'To: '$to. "\r\n";
     $headers .= 'From: Camagru <smail.hamdani@gmail.com>' . "\r\n";
     // $headers .= 'Cc: anniversaire_archive@example.com' . "\r\n";
     // $headers .= 'Bcc: anniversaire_verif@example.com' . "\r\n";

     // Envoi
     mail($to, $subject, $message);
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
        <center><font color="white">e-mail - send -</font></center>
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