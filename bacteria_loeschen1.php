<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}>
</style>
</head>
<body>

Please choice the dataset you want to delete:
<form action="bacteria_loeschen2.php" method = "post">
<?php
$con = mysqli_connect("", "root");
mysqli_select_db($con,"bacteria");
$res = mysqli_query($con, "select * from  protein_sequenz");
echo "<table border = 1>";

echo "<tr>";
echo "<td>Auswahl</td><td>Name</td><td>nr_serie</td><td>anzahl_as</td><td>datet</td><td>ursprung</td><td>comment</td>";
echo"</tr>";
while ($dsatz = mysqli_fetch_assoc($res))
{
echo "<tr>";
echo "<td><input type ='radio' name='auswahl' value='" . $dsatz["nr_serie"]. "'></td>";
echo"<td>" . $dsatz ['name'] . "</td>";
echo"<td>" . $dsatz ['nr_serie'] . "</td>";
echo"<td>" . $dsatz ['anzahl_as'] . "</td>";
echo"<td>" . $dsatz ['date'] . "</td>";
echo"<td>" . $dsatz ['ursprung'] . "</td>";
echo"<td>" . $dsatz ['comment'] . "</td>";
echo"</tr>";
}
echo"</table>";
mysqli_close($con);

?><p><input type ="submit" value="Delete dataset" /></p>
</body>
</html>