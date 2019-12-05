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
$sql = "select Name from protein_sequenz where name like '". $_POST['anfang']."%'";
$res = mysqli_query($con, $sql);
$num = mysqli_num_rows($res);

if($num == 0)
	echo "No organismus found! <br/> 
Please make another search!";
else 
	echo $num . " organismus found!<br/> <br/>"; 

 echo "<table border= '1'>";
   echo "<tr> <td> LfNr</td><td>Name</td></tr>";
   
   $Lf = 1;

   while ($dsatz = mysqli_fetch_assoc($res))
   {
	   echo "<tr>";
	   echo"<td>$Lf</td>";	   
      echo "<td>" . $dsatz["Name"] . "</td>";
		echo "</tr>";
	  $Lf = $Lf + 1;
	     }
   echo "</table>";
   mysqli_close($con);
?>
</body>
</html>