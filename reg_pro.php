<?php
session_start();
require 'db.php';
?>
<?php
$name=$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['pass'];


$_SESSION["name"]=$_POST['name'];
$_SESSION["username"]=$_POST['username'];
$_SESSION["email"]=$_POST['email'];
$_SESSION["pass"]=$_POST['pass'];

if(strlen($pass)<8)
echo "Please enter at least 8 character password";
else
{
	$sql = "INSERT INTO person (name, username,password, email)
VALUES ('$name', '$username', '$pass','$email')";

$result = $mysqli->query("SELECT * FROM person WHERE email='$email'") or die($mysqli->error());
$result1 = $mysqli->query("SELECT * FROM person WHERE name='$name'") or die($mysqli->error());

if ( $result->num_rows > 0 ) 
{
    
    echo "user with this email already exits";
}
else if ( $result1->num_rows > 0 ) 
{
    
    echo "user with this name already exits";
}
else
{
if (mysqli_query($mysqli, $sql))
 {
    echo "New record created successfully";
	header("Location:profile.php");
} 
else
 {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
}

mysqli_close($mysqli);
}
}
?>