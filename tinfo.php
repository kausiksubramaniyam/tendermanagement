<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  font-family: century gothic;
  background-color: white;
}
</style>
	<title>TNTMA</title>
</head>
<body style="background-color: white;">
	<img src="tngovt.jpg" style="width:120px;height: 120px;float: left;">
		<h1 style="font-size: 700%;background-color: white;color: #8c55aa;font-family: century gothic;text-align: left;font-weight: lighter;margin-bottom: -20px;margin-top: -1px;">TNTMA</h1>
		<h2 style="font-size: 200%;background-color:#8c55aa;color: white;font-family: century gothic;text-align: center;margin-bottom: -20px; ">ALL TENDERS</h2>


<?php
$servername = "localhost";
$usrname = "root";
$password = "Activa29#$";
$db = "tender";

// Create connection
$conn = mysqli_connect($servername, $usrname, $password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sq="SELECT * FROM tenderinfo";

$result=mysqli_query($conn,$sq);
echo "<table><th>Tender ID</th><th>Location</th><th>Budget</th><th>Application Fee</th><th>Last Date to Apply</th><th>Work Details</th>";
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td> " . $row["tenderid"]. "</td><td> " . $row["location"]. "</td><td> " . $row["budget"]. " </td><td>".$row["appfee"]. "</td><td> " .$row["lastdate"]. "</td><td> " .$row["WorkDetails"]."</td></tr><br>";
  }
 echo "</table>";
} else {
  echo "0 results";
}

mysqli_close($conn);
?>

</body>
</html>
	
