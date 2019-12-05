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
<?php
   $con = mysqli_connect("", "root");
mysqli_select_db($con, "bacteria");
$sql = "select Name , Anzahl_AS from protein_sequenz where ";

   switch($_POST["geh"])
   {
      case 1:
         $sql .= "Anzahl_AS <= 3000";
         break;
      case 2:
         $sql .= "Anzahl_AS > 3000 and Anzahl_AS <= 35000";
         break;
      case 3:
         $sql .= "Anzahl_AS > 35000 and Anzahl_AS <= 50000";
         break;
      case 4:
         $sql .= "Anzahl_AS > 5000";
   }

   $res = mysqli_query($con, $sql);
   
   $num = mysqli_num_rows($res);
   if ($num==0)
	   
		echo "Keine passenden Datensätze gefunden!";
		
		
   
   echo "<table border= '1'>";
   echo "<tr> <th>LfNr</th><th>Name</th><th>Anzahl_AS</th></tr>";
   
   $Lf = 1;

   while ($dsatz = mysqli_fetch_assoc($res))
   {
	   echo "<tr>";
	   echo"<td>$Lf</td>";	   
      echo "<td>" . $dsatz["Name"] . "</td>";
	  echo "<td>" . $dsatz["Anzahl_AS"] . "</td>";
	  echo "</tr>";
	  $Lf = $Lf + 1;
   }
   echo "</table>";
   mysqli_close($con);
?>
</body>
</html>
