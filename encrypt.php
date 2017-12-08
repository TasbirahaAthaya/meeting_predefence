<?php
include 'db.php';
session_start();
//mysql_select_db($dbname) or die('database selection problem');



if(isset($_POST['btn-upload']))
{    
     
 $file = base64_encode(rand(1000,100000)."-".$_FILES['file']['name']);
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = base64_encode($_FILES['file']['size']);
 $file_type = base64_encode($_FILES['file']['type']);
 $folder="uploads/";
 
 move_uploaded_file($file_loc,$folder.$file);
 $sql="INSERT INTO agenda(ag_file) VALUES('$file')";
 if(mysqli_query($mysqli,$sql))
 echo'y';
 else echo mysqli_error($mysqli);
}


 ?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Upload and view With PHP and MySql</title>
</head>
<body>
<form action="encrypt.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" />
<button type="submit" name="btn-upload">upload</button>
</form>
</body>
</html>