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
$gid=$_REQUEST['govtid'];
$pw=$_REQUEST['pass'];

$sqs="SELECT password FROM admin WHERE govtid=$gid";
$result=mysqli_query($conn,$sqs);
$row = mysqli_fetch_assoc($result);
if (mysqli_query($conn,$sqs)) 
{
	if($pw==$row['password'])
	{
		session_start();
		$_SESSION['hi'] = $gid;
        if($_SESSION['hi']) {
		header("location:tender2.html");
			exit();
		echo "Correct Password".$row['password'];
	}
		
	else
	    {
	    	echo "INCORRECT PASSWORD PLEASE RETRY";	
		
	    }
}
}
?>
