<?php
   include 'db.php';
   session_start();
 ?>
  
<?php
	$a=$_SESSION["name"];
	$get_noti_qwr = "select * from notification where seen_unseen = '0' AND name='$a' ";
	$qry = mysqli_query($mysqli,$get_noti_qwr);
	$count=mysqli_num_rows($qry);
	$n=$_SESSION["username"];
	$qry="SELECT * FROM person where username='$n' ";
	$result=mysqli_query($mysqli,$qry);
	while($row=mysqli_fetch_assoc($result))
	{
		$a=$row["name"];
		//echo $a;
		$b=$row["username"];
		$c=$row["address"];
		$d=$row["email"];
		$e=$row["phone_no"];
		$f=$row["NID"];
		$g=$row["img"];
	}
	
	
	//echo $_SESSION["name"]." ".$_SESSION["pass"];
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="my.css" rel="stylesheet"/>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Security based Meeting Scheduling and Documents Management System</title>
</head>

<body>
   
 </body>
 </html>
 
 <?php
 
 include  'db.php';
 
 ?>
 
 <?php
 if(isset($_POST['btn-upload']))
{    
    // $a=$_POST['name1'];
	 $id=$_POST['id'];
	 $name=$_POST['name'];
	 $venue=$_POST['venue'];
	 $date=$_POST['date'];
	 $time=$_POST['time'];
	 $type=$_POST['type'];
	 $obj=$_POST['obj'];
	 
	/* $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="uploads/";
	
	
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
	$m=move_uploaded_file($file_loc,$folder.$final_file);*/
	
	$file = base64_encode(rand(1000,100000)."-".$_FILES['file']['name']);
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = base64_encode($_FILES['file']['size']);
 $file_type = base64_encode($_FILES['file']['type']);
 $folder="uploads/";
 
 move_uploaded_file($file_loc,$folder.$file);
 $sql="INSERT INTO agenda(ag_file,date,meeting_id,time,uploader_name) VALUES('$file','$date','$id','$time','$a')";
 if(mysqli_query($mysqli,$sql))
 echo'y';
 else echo mysqli_error($mysqli); 

	
	
	
	
	
	
	
	
	
	
	
	
	 $sql="INSERT INTO meeting(M_id,M_name,location,date,time,type,task) VALUES('$id','$name','$venue','$date','$time','$type','$obj')";
		//$sql="INSERT INTO tbl_uploads(file,type,size) VALUES('$file','$file_type','$new_size')";
		if(mysqli_query($mysqli,$sql))
		echo 'y';
		else
		echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);

}
		?>