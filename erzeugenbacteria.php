<html>
<head>
<?php
if(isset($_POST["gesendet"]))
{
$con = mysqli_connect("", "root");
mysqli_select_db($con, "bacteria");
$sql = "insert protein_sequenz (name, nr_serie, anzahl_as, date, ursprung, comment) values "
  . "('" . $_POST["na"] . "', "
.   "'" . $_POST["ns"] . "', "
.   "'" . $_POST["anz"] . "', "
.   "'" . $_POST["date"] . "', "
.   "'" . $_POST["urs"] . "', " 
.   "'" . $_POST["co"] . "')";

mysqli_query($con, $sql);
$num = mysqli_affected_rows($con);
if($num>0) 
{	
echo "<p><font color='#00aa00'>";
echo "Es wurde 1 Datensatz hinzugefügt";
echo "</font></p>";

}

else 
{
echo "<p><font color='#ff0000'>" ;
echo " An error has occurred! ";
echo "No record has been added;</font></p>";

}

mysqli_close($con);
}
?>
</head>
<body>
Geben Sie bitte einen vollständigen Datensatz ein <br />
und senden Sie das Formular ab:
<form action = "erzeugenbacteria.php" method ="post">
<p> <input name="na" > Name</p>
<p> <input name="ns" > Nr_serie</p>
<p> <input name="anz" > Anzahl_as </p>
<p> <input name="date" > Date </p>
<p> <input name="urs" > Ursprung</p>
<p> <textarea name="co" cols="25" rows="10" > </textarea>Comment </p>
<p><input type ="submit" name="gesendet"><input type ="reset"></p>
</form>
<p> Alle Datensätze <a href ="bacteria2.php"> anzeigen </a></p>



</body>
</html>