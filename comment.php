<!DOCTYPE html>

<?php

	session_start();
	//$con=mysqli_connect("localhost","root","","meeting_management") or die("Connection Failed");
	include 'db.php';

?>
<?php
	$a=$_SESSION["name"];
	$get_noti_qwr = "select * from notification where seen_unseen = '0' AND name='$a' ";
	$qry = mysqli_query($mysqli,$get_noti_qwr);
	$count=mysqli_num_rows($qry);
	$n=$_SESSION["name"];
	$qry="SELECT * FROM person where name='$n' ";
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
<html>
<head>
<meta charset="utf-8">
<link href="my.css" rel="stylesheet"/>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="shortcut icon" href="img/logo2.jpg" type="image/x-icon" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Meeting Management System</title>
</head>

<body style="margin:0;background-color:#9E9E9E; background-repeat:no-repeat; background-size:cover">


      <!------bar-------->
      
      <div style="margin:0;margin-bottom:0px; padding-bottom:0px;height:60px; background-color:#e8e8e8; margin-top:00px;         padding-top:10px">
      <h3 style="margin-left:140px; font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; padding-left:30px; padding-bottom:20px; color:blue; position:absolute; padding-top:10px">      Security based Meeting Scheduling and Documents Management System</h3>
      <img src="img/logo2.jpg" style="height:100px; width:130px; margin-left:30px" class="img-circle" alt="site logo" />
               
      </div>
      
     <div class="n" style="margin:0;margin-bottom:0px; padding-bottom:0px;height:40px">
     <ul style="margin:0px;background-color:#e8e8e8; padding-left:500px; padding-top:20px">
	 
	       <li>
           <div style="padding-left:0px">
           <form action="notification_process.php" method="post" style="margin-left:600px">
           <input style="<?php 
			if($count > 0 ){
				echo "color: white;border:none;background-color: red;";
			} else echo "color:black";
		    ?>" type="submit" name="submit"  value="notification<?php echo '('.$count.')' ?>"/>
            </form>
            </div>
            </li>
            
           
           <li>
            <div class="dropdown" style="margin-left:580px">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="background-color:transparent; border:hidden"><?php echo $_SESSION["name"];?>
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
            <li><a href="profile.php">My Account</a></li>
            <li><a href="edit.php">Edit profile</a></li>
            <li><a href="meeting_form.php">Call a Meeting</a></li>
            <li><a href="logout.php">Log out</a></li>
            </ul>
            
          </div>
          <!-- end image plus menu -->
         </li>
	
          
	</ul>
   </div>
   
   <!-----end bar ----->
  
   
<br>
<br>
<br>
<br>
<br>


<!-- start comment -->
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<form action="comment.php" method="POST" enctype="multipart/form-data" id="cmtform">
<br>

	<br>
	<br>
	<textarea
    name="com" id="comments" align='' placeholder="Enter your comment...."
	style="width:80%;height:250px;padding:0px;font-size:1.2em;border-top:1px dotted #000000;
			border-right:20px solid #000000;border-bottom:4px solid #000000;
			border-left:10px solid #000000;margin-left:20px; margin-top:0px; padding-top:0px;text-align: left;vertical-align: top;"></textarea>
	</br>
	</br>
	<input type="submit" value="Comment" name="cm" method="POST"
	style="background-color:#E0D0D1;margin-left:20px; margin-top:0px; height:40px; width:100px; float:right; margin-right:300px">
</br>
<br>
</br>
</form>
<?php
$a=$_SESSION["name"];
//echo $a;
if((isset($_POST["cm"])))
                            {
                                $cmt = $_POST["com"];
                                if($cmt !="")
                                {
									$d=date("Y-m-d");
									date_default_timezone_set("Asia/Dhaka");
									$t=date("h:i:sa");
                                    $query1="INSERT INTO comment(cmt,username,meeting_id,meeting_name,date,time)
											VALUES('$cmt','$a',1,'Academic Council','$d','$t')";
                                    mysqli_query($mysqli, $query1);
                                }
								
							}  
			$query = "SELECT distinct cmt FROM comment WHERE meeting_id='1' && meeting_name='Academic Council'";
			$query3 = "SELECT username,date,time FROM comment WHERE meeting_id='1' && meeting_name='Academic Council'";
			$st=mysqli_query($mysqli, $query); 
			if($st) echo "y"; else echo mysqli_error($mysqli);
			$st1=mysqli_query($mysqli, $query3);
			                $ctr=1;
                            while(($row = mysqli_fetch_assoc($st))!=FALSE && ($row1 = mysqli_fetch_assoc($st1))!=FALSE)
                            {
								//echo '<br>';
                                //echo $ctr;
								//echo '</br>';
								$data[]=$row1;
                                
									//echo '<br>';
									echo '<body>';
									/*echo "
									<div class=\"form-group\">
                                  <label class=\"col-sm-1 control-label\">".$row1['username']."</label>
                                  <div class=\"col-sm-9 controls\">
                                    <div class=\"row mgbt-xs-0\">
									<br>
                                      <div class=\"col-xs-9\">
                                          <div class=\"w3-rest w3-border w3-center w3-border-black \" ><b>".$row['cmt']."</b></div>
                                      </div>
									  </br>
                                      <!-- col-xs-12 --> 
                                    </div>
                                    <!-- row --> 
                                  </div>
                                  <!-- col-sm-10 --> 
                                </div>";*/
								
//<!-- Right-aligned media object -->
  echo "
  
  <div class=\"media\" style=\"background-color:##B388FF;margin-left:70px; margin-top:0px;\">
    <div class=\"media-body\">
      <h3 class=\"media-heading\">".$row1['username']."<small><i> posted on ".$row1['date']." ".$row1['time']."</i></small></h3>
      <p>".$row['cmt']."</p>
    </div>
  </div>
<hr>
</body>";
								
									//echo '</br>';
									
									
								
								//echo $_SESSION["name"];
                                $ctr=$ctr+1;
                            }
                            							
?>
<!--end comment-->

</html>
</br>
</br>
</br>
</br>
</br>
</body>
</html>
