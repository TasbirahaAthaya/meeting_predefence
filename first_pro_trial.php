<?php
include 'db.php';

?>

<?php

$username=$_POST['username'];
$pass=$_POST['password'];

$sql = "SELECT * FROM person";
	$result = mysqli_query($mysqli,$sql);
	
	
	while($row = mysqli_fetch_assoc($result)) {
	   	echo $username." ".$row['username']." ".$pass." ".$row['password'];
		if($username == $row['username'] && $pass == $row['password'] ) 
		{
			header("location: blog-post.php");
		}
		else
		echo "no";
	}
	?>