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
<?php
$con = mysqli_connect("", "root");
mysqli_select_db($con, "bacteria");
$sql = "select * from protein_sequenz";
$res = mysqli_query($con, $sql);

echo "<table border= '1'>";
echo "<tr> <td> LfNr</td><td>Name</td><td> Nr_Serie</td> <td>Anzahl_AS </td> <td> Date</td> <td>Comment </td></tr>";

$Lf = 1;
while ($dsatz = mysqli_fetch_assoc($res))
{
echo "<tr>";
echo "<td>$Lf</td>";
echo "<td>". $dsatz["name"] . "</td>";
echo "<td>". $dsatz["nr_serie"] . "</td>";
echo "<td>". $dsatz["anzahl_as"] . "</td>";
echo "<td>". $dsatz["date"] . "</td>";
echo "<td>" . $dsatz["comment"] ."</td>";
echo "</tr>";
$Lf = $Lf + 1;

}
 echo "</table>";
 mysqli_close($con)
?> 
</html>

