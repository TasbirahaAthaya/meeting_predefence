<?php
session_start();
include 'db.php';
$a=$_POST["username"];
$b=$_POST["password"];
echo $a;
echo $b;
//$c=$_POST[""];
//$d=$_POST["password"];
//$e=$_POST["password"];
//$f=$_POST["password"];

$sql = "SELECT * FROM person";
	$result = mysqli_query($mysqli,$sql);
	if($result)echo "yesssssss"."<br>";
	else mysqli_error($mysqli);
	
	
	while($row = mysqli_fetch_assoc($result)) 
	{
		$_SESSION["username"]=$a;
		$_SESSION["name"]=$row['name'] ;
		//$_SESSION["address"]=$b;
		//$_SESSION["email"]=$b;
		//$_SESSION["nid"]=$b;
		
		//echo $_SESSION["name"]." ".$_SESSION["pass"];
		echo "row:".$row['username']." ";
		echo $row['password']."<br>";
		echo "again". $a," ".$b;
	   	
		if($a == $row['username'] && $b == $row['password'])
		{
			echo"in";		
			header("location: blog-post.php");	
		}
		else
		{
			echo "username and password doesnt match";
		}
	}
	?>