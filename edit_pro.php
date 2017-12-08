<?php
session_start();
   include 'db.php';
 ?>
  
<body>
<?php
session_start();
include 'db.php';
$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="uploads/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	$m=move_uploaded_file($file_loc,$folder.$final_file);
	$a=$_SESSION["name"];
	$b=$_POST["username"];
	$c=$_POST["address"];
	$e=$_POST["phone_no"];
	$f=$_POST["nid"];
	$get_noti_qwr = "UPDATE person
SET username = '$b', address='$c',phone_no='$e',NID='$f',img='$final_file'
WHERE person.name='$a' ";
	if(mysqli_query($mysqli,$get_noti_qwr)){echo "succesfully updated"; header("Location:profile.php");}
	else echo "error".mysqli_error($mysqli);
	//$sql="INSERT INTO person(name,username,img,password,email) VALUES ('$a','$b','$image','pass','@sd')";
	//$sql="INSERT INTO person(username,img,password,email) VALUES ('aa','$image','890','fh')";
    //if(mysqli_query($mysqli,$sql))echo "s";
     //else echo "Error".mysqli_error($mysqli);

?>
</body>
</html>
