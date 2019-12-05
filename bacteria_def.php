<html>
<body>
<?php
$con = mysqli_connect("", "root");
mysqli_select_db($con, "bacteria");
$sql = "select name, anzahl_as from protein_sequenz where anzahl_as >= " . $_POST['ug'] . " and anzahl_aS <= " . $_POST['og'];
 
$res = mysqli_query($con, $sql);

$num = mysqli_num_rows($res);

if($num==0) echo "keine passenden Datensätze gefunden!<br />";

else if($num==1)
	echo $num . " Record found!<br />";
else 
	echo $num . " Records found!<br />";
while($dsatz = mysqli_fetch_assoc($res))
	echo $dsatz["name"] . ", " . $dsatz["anzahl_as"] . "<br />";
mysqli_close($con);
?> 
</body>
</html>