<?php
session_start();
include 'db.php';
?>

<?php
$a=$_SESSION["username"];

$get_noti_qwr = "select * from notification where seen_unseen = '0' AND name='$a' ";
$qry = mysqli_query($mysqli,$get_noti_qwr);
$count=mysqli_num_rows($qry);

$qry="SELECT * FROM person where username='$a' ";
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
}


//echo $_SESSION["name"]." ".$_SESSION["pass"];

?>



<!doctype html>
<style>
    i:hover{color:green}
    span.showonhover{display:block;
        position:absolute;
        font-size:18px;
    }
    i{color:black}
    a:hover{color:blue}
</style>


<html>
<head>
    <meta charset="utf-8">
    <link href="my.css" rel="stylesheet"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/logo2.jpg" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Security based Meeting Scheduling and Documents Management System</title>
</head>

<body style="margin:0; background-repeat:no-repeat; background-size:cover; background-image:url(EMPC-meeting-phoht.jpg)">


<!------bar-------->

<div style="margin:0;margin-bottom:0px; padding-bottom:0px;height:60px; background-color:#e8e8e8; margin-top:00px;         padding-top:10px">
    <h3 style="margin-left:140px; font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; padding-left:30px; padding-bottom:20px; color:blue; position:absolute; padding-top:10px">      Security based Meeting Scheduling and Documents Management System</h3>
    <img src="img/logo2.jpg" style="height:100px; width:130px; margin-left:30px" class="img-circle" alt="site logo" />

</div>

<div class="n" style="margin:0;margin-bottom:0px; padding-bottom:0px;height:40px">
    <ul style="margin:0px;background-color:#e8e8e8; padding-left:500px; padding-top:20px">



        <!-- <li><img src="pro3.jpg" style=" height:40px; width:40px; margin-left:200px" class="img-circle"></li>-->

        <li>
            <div class="dropdown" style="margin-left:580px">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                        style="color:black;background-color:transparent; border:hidden"><?php echo $_SESSION["username"];?>
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="profile.php">My Account</a></li>
                    <li><a href="edit.php">Edit profile</a></li>
                    <li><a href="meeting_form_trial.php">Call a Meeting</a></li>

                </ul>

            </div>
            <!-- end image plus menu -->
        </li>
        <li>
            <a href="logout.php">
                <img src="img/logout.png" style="height:30px; width:30px; margin-left:550px" alt="HTML tutorial" style="width:42px;height:42px;border:0;">
            </a>
        </li>


    </ul>
</div>

<!-----end bar ----->
   
  
  
   
<div class="form-group" style="padding:0px; padding-left:30px; padding-right:20px; float:left;
                              margin-bottom:50px">
           <h2 style="padding:40px">Upcoming Meetings</h2> 
						
					<?php
				//	$date1=date('d_m_y');
			//		$date2='31_12_11';
		//			if(strtotime($date1) < strtotime($date2))
			//			echo '1 is small ='.strtotime($date1).','.$date1;
				//	else
					$a=$_SESSION["username"]; // $a te id ace
					
					$name_sql_1 = "Select name from person where username='$a'";
					$result1 = mysqli_query($mysqli,$name_sql_1);
					while($row1 = $result1->fetch_assoc()) {
						$name1 = $row1["name"];
						//echo $name1;
						}
					//$sql = "SELECT * from meeting_table"; 
					$sql = "SELECT * from meeting WHERE M_id = ANY 
					(SELECT m_id from attendees where '$a'=p_id and confirmation IS NULL || confirmation)";
					$result = mysqli_query($mysqli,$sql);
					$count = 0;
					$array[$count]=1;
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						$l=$row["location"];
						$m=$row['M_id'];
						$t = time();
						//echo(date("Y-m-d",$t));
						 $date =$row["date"];
						 //  echo $date;
						
						 if ($count%3==0 and (date("Y-m-d",$t)<$date) )
						 {   echo '<div style=" height:250px;border-style:solid;border-color:black;
					 border-width:3px; border-radius:15px; padding-left:30px;
					 width:300px; padding-top:20px;
					 background-color:#E8E8E8;  margin-left:80px; display:inline-block">';
						echo '<label for="name">Meeting ID:</label>';
						echo " ".$row["M_id"]."</br>";
						echo '<label for="name">Meeting Name:</label>';
						echo " ".$row["M_name"]."</br>";
						echo '<label for="name">Meeting Time:</label>';
						echo " ".$row["time"]."</br>";
						echo '<label for="name">Meeting Date:</label>';  
						echo " ".$row["date"]."</br>";			  
							?>
						
						
						   <a href="showfiles.php?id=<?php echo $row['M_id'];?>"><i class="fa fa-file-o" style="font-size:36px">
							</i></i></a> 
							<a href="comment.php?id=<?php echo $row['M_id'];?>"> 
							<i class="fa fa-comment-o" style="font-size:36px;padding:20px;margin-left:20px">
							</i></a>
							<?php
                         echo '<form method="get" action="blog-post.php" style="padding-left:20px">

							  <input type="radio" id="private" name="privacy" value="0">
							  <label for="going">going</label>

							  <input type="radio" id="public" name="privacy" value="1">
							  <label for="not going">not going</label>

							  <input type="submit" value="Save">

							</form>';							
						echo '</div>';			  
						 }
						 if ($count%3 ==1 and (date("Y-m-d",$t)<$date))
						 {
					echo'<div style=" height:300px; width:300px; background-color:#E8E8E8;
					margin-left:80px; display:inline-block;
					border-style:solid;border-color:black;
					 border-width:3px; border-radius:15px">
 
                      <div class="form-group" style="padding-top:30px; padding-left:30px; padding-right:20px">
                      <label for="name">Meeting ID:</label>';
                      echo " ".$row["M_id"]."</br>";
                      echo '</div>';
                      
                     echo ' <div class="form-group" style="padding:0px; padding-left:30px; padding-right:20px">
                      <label for="name">Meeting Name:</label>';
                      echo " ".$row["M_name"]."</br>";
					  echo '<label for="name">Meeting Time:</label>';
						echo " ".$row["time"]."</br>";
						echo '<label for="name">Meeting Date:</label>';  
						echo " ".$row["date"]."</br>";
                      echo ' </div>';
                                        
                     	?>
						
						
						   <a href="showfiles.php?id=<?php echo $row['M_id'];?>"><i class="fa fa-file-o" 
						   style="font-size:36px;padding-left:40px">
							</i></a> 
							<a href="comment.php?id=<?php echo $row['M_id'];?>"> 
							<i class="fa fa-comment-o" style="font-size:36px;padding:20px;margin-left:20px">
							</i></a>
							<?php
                         echo '<form method="get" action="blog-post.php" style="padding-left:20px">

							  <input type="radio" id="private" name="privacy" value="0">
							  <label for="going">going</label>

							  <input type="radio" id="public" name="privacy" value="1">
							  <label for="not going">not going</label>

							  <input type="submit" value="Save">

							</form>';							

                      echo'</div>';
					  
						 }
					if ($count%3==2 and (date("Y-m-d",$t)<$date))
					{
						echo ' <div style=" height:300px; width:300px; background-color:#E8E8E8; margin-top:30px;
						margin-left:50px; display:inline-block;
						border-style:solid;border-color:black;
					 border-width:3px; border-radius:15px">
 
                      <div class="form-group" style="padding-top:30px; padding-left:30px; padding-right:20px">
                      <label for="name">Meeting ID:</label>';
                       echo " ".$row["M_id"]."</br>";
                      echo '</div>';
                      
                      echo '<div class="form-group" style="padding:0px; padding-left:30px; padding-right:20px">
                      <label for="name">Meeting Name:</label>';
                       echo " ".$row["M_name"]."</br>";
					   echo '<label for="name">Meeting Time:</label>';
						echo " ".$row["time"]."</br>";
						echo '<label for="name">Meeting Date:</label>';  
						echo " ".$row["date"]."</br>";
                     echo ' </div>';
                   
                    	?>
						
						
						   <a href="showfiles.php?id=<?php echo $row['M_id'];?>">
						   <i class="fa fa-file-o" style="font-size:36px;padding-left:40px">
							</i></a> 
							<a href="comment.php?id=<?php echo $row['M_id'];?>"> 
							<i class="fa fa-comment-o" style="font-size:36px;padding:20px;margin-left:20px">
							</i></a>
							<?php	
                      echo '<form method="get" action="blog-post.php" style="padding-left:20px">

							  <input type="radio" id="private" name="privacy" value="0">
							  <label for="going">going</label>

							  <input type="radio" id="public" name="privacy" value="1">
							  <label for="not going">not going</label>

							  <input type="submit" value="Save">

							</form>';
                      echo'</div>';
   
					}						
						 $count = $count + 1;
						 
					}
					
				} else {
					echo "0 results";
				}
				   ?>
					 
 </div>


<div class="form-group" style="padding:0px; padding-left:30px; padding-right:20px; float:left">
           <h2 style="padding:20px;float:left">Recent Attended Meetings</h2> 
						
					<?php
			
					$a=$_SESSION["username"]; // $a te id ace
					
					$name_sql_1 = "Select name from person where username='$a'";
					$result1 = mysqli_query($mysqli,$name_sql_1);
					while($row1 = $result1->fetch_assoc()) {
						$name1 = $row1["name"];
						//echo $name1;
						}
					
					$sql = "SELECT * from meeting WHERE M_id = ANY 
					(SELECT m_id from attendees where '$a'=p_id)";
					$result = mysqli_query($mysqli,$sql);
					$count = 1;
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						$l=$row["location"];
						$t = time();
						//echo(date("Y-m-d",$t));
						 $date =$row["date"];
						 //  echo $date;
						
						 if ($count%3==0 and (date("Y-m-d",$t)>$date) )
						 {   echo '<div style=" height:300px;border-style:solid;border-color:black;
					 border-width:3px; border-radius:15px; padding-left:30px;
					 width:300px; padding-top:20px;
					 background-color:#E8E8E8; margin-top:30px; margin-left:80px; display:inline-block">';
							 echo '<label for="name">Meeting ID:</label>';
						 echo " ".$row["M_id"]."</br>";
						echo '<label for="name">Meeting Name:</label>';
						 echo " ".$row["M_name"]."</br>";
						 echo '<label for="name">Meeting Time:</label>';
						echo " ".$row["time"]."</br>";
						echo '<label for="name">Meeting Date:</label>';  
						echo " ".$row["date"]."</br>";
						  
							?>
						
						
						   <a href="showfiles.php?id=<?php echo $row['M_id'];?>"><i class="fa fa-file-o" 
						   style="font-size:36px;padding-left:40px">
							</i></a> 
							<a href="comment.php?id=<?php echo $row['M_id'];?>"> 
							<i class="fa fa-comment-o" style="font-size:36px;padding:20px;margin-left:20px">
							</i></a>
							<?php						
						echo '</div>';			  
						 }
						 if ($count%3 ==1 and (date("Y-m-d",$t)>$date))
						 {
					echo'<div style=" height:300px; width:300px; background-color:#E8E8E8; margin-top:30px;
					margin-left:80px; display:inline-block;
					border-style:solid;border-color:black;
					 border-width:3px; border-radius:15px">
 
                      <div class="form-group" style="padding-top:30px; padding-left:30px; padding-right:20px">
                      <label for="name">Meeting ID:</label>';
                      echo " ".$row["M_id"]."</br>";
                      echo '</div>';
                      
                     echo ' <div class="form-group" style="padding:0px; padding-left:30px; padding-right:20px">
                      <label for="name">Meeting Name:</label>';
                      echo " ".$row["M_name"]."</br>";
					  echo '<label for="name">Meeting Time:</label>';
						echo " ".$row["time"]."</br>";
						echo '<label for="name">Meeting Date:</label>';  
						echo " ".$row["date"]."</br>";
                      echo ' </div>';
                      
                 	?>
						
						
						   <a href="showfiles.php?id=<?php echo $row['M_id'];?>"><i class="fa fa-file-o" 
						   style="font-size:36px;padding-left:40px">
							</i></a> 
							<a href="comment.php?id=<?php echo $row['M_id'];?>"> 
							<i class="fa fa-comment-o" style="font-size:36px;padding:20px;margin-left:20px">
							</i></a>
							<?php 
                      echo'</div>';

						 }
					if ($count%3==2 and (date("Y-m-d",$t)>$date))
					{
						echo ' <div style=" height:300px; width:300px; background-color:#E8E8E8; margin-top:30px;
						margin-left:50px; display:inline-block;
						border-style:solid;border-color:black;
					 border-width:3px; border-radius:15px">
 
                      <div class="form-group" style="padding-top:30px; padding-left:30px; padding-right:20px">
                      <label for="name">Meeting ID:</label>';
                       echo " ".$row["M_id"]."</br>";
                      echo '</div>';
                      
                      echo '<div class="form-group" style="padding:0px; padding-left:30px; padding-right:20px">
                      <label for="name">Meeting Name:</label>';
                       echo " ".$row["M_name"]."</br>";
					   echo '<label for="name">Meeting Time:</label>';
						echo " ".$row["time"]."</br>";
						echo '<label for="name">Meeting Date:</label>';  
						echo " ".$row["date"]."</br>";
                     echo ' </div>';
                      
                 	?>
						
						
						   <a href="showfiles.php?id=<?php echo $row['M_id'];?>"><i class="fa fa-file-o" 
						   style="font-size:36px;padding-left:40px">
							</i></a> 
							<a href="comment.php?id=<?php echo $row['M_id'];?>"> 
							<i class="fa fa-comment-o" style="font-size:36px;padding:20px;margin-left:20px">
							</i></a>
							<?php
                      echo'</div>';
   
					}						
						 $count = $count + 1;
					}
				} else {
					echo "0 results";
					echo '<div style="border-style:solid;border-width:5px;border-color:white;height:50px"></div>';
				}
				   ?>
					 
 </div>
             
   <div class="form-group" style="padding:0px; padding-left:30px; padding-right:20px; float:left">
           <h2 style="padding:20px">Upcoming Called Meetings</h2> 
						
					<?php
				
					$a=$_SESSION["username"]; // $a te id ace
					
					$name_sql_1 = "Select name from person where username='$a'";
					$result1 = mysqli_query($mysqli,$name_sql_1);
					while($row1 = $result1->fetch_assoc()) {
						$name1 = $row1["name"];
						//echo $name1;
						}
					
					$sql = "SELECT * FROM meeting";
					$result = mysqli_query($mysqli,$sql);
					$count = 1;
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						$l=$row["location"];
						$t = time();
						//echo(date("Y-m-d",$t));
						 $date =$row["date"];
						 //  echo $date;
						
						 if ($count%3==0 and (date("Y-m-d",$t)<$date) )
						 {   echo '<div style=" height:300px;border-style:solid;border-color:black;
					 border-width:3px; border-radius:15px; padding-left:30px;
					 width:300px; padding-top:20px;
					 background-color:#E8E8E8; margin-top:30px; margin-left:80px; display:inline-block">';
							 echo '<label for="name">Meeting ID:</label>';
						 echo " ".$row["M_id"]."</br>";
						echo '<label for="name">Meeting Name:</label>';
						 echo " ".$row["M_name"]."</br>";
						 echo '<label for="name">Meeting Time:</label>';
						echo " ".$row["time"]."</br>";
						echo '<label for="name">Meeting Date:</label>';  
						echo " ".$row["date"]."</br>";
							?>
						
						
						   <a href="showfiles.php?id=<?php echo $row['M_id'];?>"><i class="fa fa-file-o" 
						   style="font-size:36px;padding-left:40px">
							</i></a> 
							<a href="comment.php?id=<?php echo $row['M_id'];?>"> 
							<i class="fa fa-comment-o" style="font-size:36px;padding:20px;margin-left:20px">
							</i></a>
							<a href="post_form.php?id=<?php echo $row['M_id'];?>"> 
							<i class="fa fa-user-circle-o" style="font-size:36px;padding:10px;margin-left:15px">
							</i></a>
						<?php
						echo '</div>';			  
						 }
						 if ($count%3 ==1 and (date("Y-m-d",$t)<$date))
						 {
					echo'<div style=" height:300px; width:300px; background-color:#E8E8E8; margin-top:30px;
					margin-left:80px; display:inline-block;
					border-style:solid;border-color:black;
					 border-width:3px; border-radius:15px">
 
                      <div class="form-group" style="padding-top:30px; padding-left:30px; padding-right:20px">
                      <label for="name">Meeting ID:</label>';
                      echo " ".$row["M_id"]."</br>";
                      echo '</div>';
                      
                     echo ' <div class="form-group" style="padding:0px; padding-left:30px; padding-right:20px">
                      <label for="name">Meeting Name:</label>';
                      echo " ".$row["M_name"]."</br>";
					  echo '<label for="name">Meeting Time:</label>';
						echo " ".$row["time"]."</br>";
						echo '<label for="name">Meeting Date:</label>';  
						echo " ".$row["date"]."</br>";
                      echo ' </div>';
					  ?>
						
						
						   <a href="showfiles.php?id=<?php echo $row['M_id'];?>"><i class="fa fa-file-o" 
						   style="font-size:36px;padding-left:40px">
							</i></a> 
							<a href="comment.php?id=<?php echo $row['M_id'];?>"> 
							<i class="fa fa-comment-o" style="font-size:36px;padding:20px;margin-left:20px">
							</i></a>
							<a href="post_form.php?id=<?php echo $row['M_id'];?>"> 
							<i class="fa fa-user-circle-o" style="font-size:36px;padding:10px;margin-left:15px">
							</i></a>
						<?php
                      echo'</div>';
					  
						 }
					if ($count%3==2 and (date("Y-m-d",$t)<$date))
					{
						echo ' <div style=" height:300px; width:300px; background-color:#E8E8E8; margin-top:30px;
						margin-left:50px; display:inline-block;
						border-style:solid;border-color:black;
					 border-width:3px; border-radius:15px">
 
                      <div class="form-group" style="padding-top:30px; padding-left:30px; padding-right:20px">
                      <label for="name">Meeting ID:</label>';
                       echo " ".$row["M_id"]."</br>";
                      echo '</div>';
                      
                      echo '<div class="form-group" style="padding:0px; padding-left:30px; padding-right:20px">
                      <label for="name">Meeting Name:</label>';
                       echo " ".$row["M_name"]."</br>";
					   echo '<label for="name">Meeting Time:</label>';
						echo " ".$row["time"]."</br>";
						echo '<label for="name">Meeting Date:</label>';  
						echo " ".$row["date"]."</br>";
                     echo ' </div>';
                      ?>
						
						
						   <a href="showfiles.php?id=<?php echo $row['M_id'];?>"><i class="fa fa-file-o" 
						   style="font-size:36px;padding-left:40px">
							</i></a> 
							<a href="comment.php?id=<?php echo $row['M_id'];?>"> 
							<i class="fa fa-comment-o" style="font-size:36px;padding:20px;margin-left:20px">
							</i></a>
							<a href="post_form.php?id=<?php echo $row['M_id'];?>"> 
							<i class="fa fa-user-circle-o" style="font-size:36px;padding:10px;margin-left:15px">
							</i></a>
						<?php

                      echo'</div>';
   
					}						
						 $count = $count + 1;
					}
				} else {
					echo "0 results";
				}
				   ?>
					 
 </div>
   
  
  
  
   <!---div style="height:20px; width:2000px; margin-top:; padding-left:0px;background-color:#e8e8e8"></div---> 
 </body>
 </html>