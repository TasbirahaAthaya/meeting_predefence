<?php
include 'db.php';
$a=$_POST['username'];
$b=$_POST['password'];
$sql="SELECT * FROM person";
$result = mysqli_query($mysqli,$sql);
if(mysqli_query($mysqli,$sql))echo "e";
else echo mysqli_error($mysqli);
$user = rtrim($a);
$pass= rtrim($b);
while($row=mysqli_fetch_assoc($result))
{
if($row['username']==$user && $row['password']==$pass)
echo "bb";
else "fuck";
}


?>
