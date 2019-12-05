<?php
   /* Session starten oder wieder aufnehmen */
   session_start();

   /* Falls Aufruf von Login-Seite */
   if(isset($_POST["n"]))
   {
      /* Falls Name und Passwort korrekt */
      if($_POST["n"] == "Hans" && $_POST["p"] == "bingo"
         || $_POST["n"] == "Gerd" && $_POST["p"] == "tango"
		 || $_POST["n"] == "Kokou" && $_POST["p"] == "Mariemarie10"
		 || $_POST["n"] == "Ali" && $_POST["p"] == "pass.ali1999"
		 || $_POST["n"] == "yazan" && $_POST["p"] == "54284254446067"
		 )
      {
         $_SESSION["n"] = $_POST["n"];
      }
   }

   /* Kontrolle, ob innerhalb der Session */
   if (!isset($_SESSION["n"]))
      exit("<p>Kein Zugang<br /><a href='bacteria_acceuil.php'>Zum Login</a></p>");
?>

<html>
<body>
<h3>Intro-Seite</h3>
<?php
   /* Begrüßung des Benutzers */
   echo "<p>Hallo " . $_SESSION["n"] . "</p>";
   echo"Please click bellow and discover the world of our Organims!!!!"
?>
<p><a href="bacteria_acceuil_b.php">Continue there!</a></p>
<p><a href="bacteria_acceuil.php">Logoff</a></p>
</body>
</html>
