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
	 $n=$_POST['n'];
	$type=$_POST['type'];
	$obj=$_POST['obj'];
	$venue=$_POST['venue'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	// echo $a;
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
	
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO notification(agenda,venue,date,time,m_type) VALUES('$final_file','$venue','$date','$time','$type')";
		//$sql="INSERT INTO tbl_uploads(file,type,size) VALUES('$final_file','$file_type','$new_size')";
		if(mysqli_query($mysqli,$sql))echo 'y';else {echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);}
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='meeting_form.php?success';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
       // window.location.href='index.php?fail';
        </script>
		<?php
	}
}
  
 ?>
 