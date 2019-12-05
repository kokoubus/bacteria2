<html>
<body>
<?php
if(isset ($_POST["auswahl"]))
{
$con = mysqli_connect("", "root");
mysqli_select_db($con, "bacteria");
$sql = "select * from protein_sequenz where nr_serie = " . $_POST["auswahl"];
 
 $res = mysqli_query($con,$sql);
$dsatz = mysqli_fetch_assoc($res);
echo"Make your change and , <br />";
echo "send it! <br />";

echo "<form action='bacteria_update3.php' method = 'post'>";
echo"<input name='nn' value='" . $dsatz["name"] . "'/>name</p>";
echo"<input name='ns' value='" . $_POST["auswahl"] . "'/>Nr_serie</p>";
echo"<input name='anz' value='" . $dsatz["anzahl_as"] . "'/>Anzahl_AS</p>";
echo"<input name='date' value='" . $dsatz["date"] . "'/>Date</p>";
echo"<input name='urs' value='" . $dsatz["ursprung"] . "'/>Ursprung</p>";
echo"<input name='co' value='" . $dsatz["comment"] . "'/>Comment</p>";
echo"<input type='hidden' name='oripn' value='". $_POST["auswahl"] . "'/>";
echo"<p><input type='submit' value ='Änderungen in Datenbank speichern'>";
echo"<input type='reset'></p>";
echo"</form>";
mysqli_close($con);

}
else	
	echo"<p>You didn´t modify any dataset!</p>"

?></body>
</html>