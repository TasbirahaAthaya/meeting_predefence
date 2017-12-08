<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="my.css" rel="stylesheet"/>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="shortcut icon" href="img/logo2.jpg" type="image/x-icon" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Design and Development of Meeting Management and Information System</title>
</head>

<body style="margin:0; background-image:url(EMPC-meeting-phoht.jpg); background-repeat:no-repeat; background-size:cover">


      <!------bar-------->
      
      <div style="margin:0;margin-bottom:0px; padding-bottom:0px;height:120px; background-color:#e8e8e8; margin-top:00px;         padding-top:10px">
      <h3 style="margin-left:140px; font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; padding-left:30px; padding-bottom:20px; color:blue; position:absolute; padding-top:10px">      Security based Meeting Scheduling and Documents Management System</h3>
      <img src="img/logo2.jpg" style="height:100px; width:130px; margin-left:30px" class="img-circle" alt="site logo" />
               
      </div>
      

<?php
$conn=mysqli_connect("localhost","root","","home");
		if($conn){/*echo "Connected<br>";*/}
		else die("could not connect".mysqli_error());
	$get_noti_qwr = "select * from notification where seen_unseen = '0'";
	$qry = mysqli_query($conn,$get_noti_qwr);
	$count=mysqli_num_rows($qry);
			if(isset($_POST['submit'])){
		
		
		while ($r=mysqli_fetch_array($qry)){
			echo"<div style='background-color:#e8e8e8; height:400px; margin-top:50px; margin-left:20px; margin-right:20px'"; 
			echo "</div>";
			echo "<font size='6px' style='margin:80px; color=blue'>"; echo "YOUR NOTIFICATIONS:"."<br>";
			echo "<hr>";
			echo "<font size=8px style='margin:80px; padding-top:600px'>"; echo $r["msg"];
			echo "</font>";
			echo "<div class='form-group' style='margin-left:70px'>
       
       <input type='radio' name='dept' value='Departmental'> Goning<br>
       <input type='radio' name='dept' value=Inter-departmental'> Not Going<br>
       <input type='radio' name='dept' value='Inter-university'> Not sure
       </div>";
			 
		}
		/*else
		{
			echo"<div style='background-color:white; height:400px; margin-top:50px; margin-left:20px; margin-right:20px'"; 
			echo "</div>";
			echo "<font size='30px' style='margin:80px; color=blue'>"; echo "YOUR NOTIFICATIONS:"."<br>";
			echo "<hr>";
			echo "<font size=15px style='margin:80px; padding-top:600px'>"; echo "you have no new notification";
			echo "</font>";
			
		}*/
		
		
		
		
		$update_query = "update notification SET seen_unseen='1' where seen_unseen='0';";
		mysqli_query($conn,$update_query);
		
		
	}
	?>
	
    </body>
    </html>