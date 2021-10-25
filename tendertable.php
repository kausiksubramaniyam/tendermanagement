<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<img src="tngovt.jpg" style="width:90px;height: 90px;float: left;">
	<h1 style="font-size: 400%;background-color: white;color: rgb(0,77,153);font-family: century gothic;text-align: left;font-weight: lighter;margin-top: -1px;">TNTMA</h1>
<?php
$sname="localhost";
$uname="root";
$pass="Activa29#$";
$dbname="tender";

$conn=mysqli_connect($sname,$uname,$pass,$dbname);
if (!$conn) {
	die("connection failed".mysqli_connect_error());
}

$wd=$_REQUEST['workinfo'];
$loc=$_REQUEST['location'];
$bdgt=$_REQUEST['budget'];
$af=$_REQUEST['appfee'];
$date=$_REQUEST['lastdate'];

$sqs="INSERT INTO tenderinfo (location,budget,appfee,lastdate,WorkDetails) VALUES('$loc',$bdgt,$af,'$date','$wd')";
if (mysqli_query($conn, $sqs)) {
  echo "Tender uploaded Succesfully";
  echo nl2br("\n$loc\n$bdgt\n$af\n$date\n$wd\n\n******UPDATED SUCCESSFULLY******");
} else {
  echo "Error creating row: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>
