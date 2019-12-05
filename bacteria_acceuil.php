<html>
<?php
/*Vor beenden der Session wieder aufnehmen*/
session_start();

/*Beenden der Session*/
session_destroy();
$_SESSION = array();
?>
<body>
<h1>Anmeldung</h1>

<p>

<img src="Human_alfa2beta2_hemoglobin.gif" alt="Protein_3D_Animation" style="width:170px;height:170px;margin-left:15px">
<img src="Human_alfa2beta2_hemoglobin.gif" alt="Protein_3D_Animation" style="width:170px;height:170px;margin-left:15px; float:left">

</p>

<br/><br/>
<p>
<form action = "bacteria_acceuil_a.php" method="post">
<p><input name="n" maxlength = "10" > Benutzername(max. 10 Zeichen)</p>
<p><input type= "password" name= "p" > </p>
<input type="submit" name="gesendet"> <input type="reset">

</form>
</p>
</body>
</html>