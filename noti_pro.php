<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="my.css" rel="stylesheet"/>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Design and Development of Meeting Management and Information System</title>
</head>

<body style="margin:0; background-image:url(EMPC-meeting-phoht.jpg); background-repeat:no-repeat; background-size:cover">


      <!------bar-------->
      
      <div style="margin:0;margin-bottom:0px; padding-bottom:0px;height:40px; background-color:#E0D0D1; margin-left:20px;         margin-right:20px; margin-top:10px; padding-top:10px">
      <h3 style="margin:0px; padding-left:30px; padding-bottom:20px; color:blue; position:absolute; padding-top:10px">Design and      Development of Meeting Managment and Information System</h3>
      </div>
      
     <div class="n" style="margin:0;margin-bottom:0px; padding-bottom:0px;height:50px; margin-left:20px; margin-right:20px">
     <ul style="margin:0px;background-color:#E0D0D1; padding-left:500px">
           <li ><a href="#" >Contact</a></li>
           <li><a href="#" >About Us</a></li>
           <li>
           <form>
		    <input type="submit" name="submit"  value="notification<?php echo '('.$count.')' ?>"/>
            </form>
            
           <li>
           <!-- image plus menu -->
           <div >
           <img src="pro3.jpg"  class="img-circle" style="margin-left:200px; height:40px; width:40px"/>
           </li>
           <li>
            <div class="dropdown" style="margin-left:120px">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="background-color:transparent; border:hidden">Munira
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
            <li><a href="profile.php">My Account</a></li>
            <li><a href="edit.php">Edit profile</a></li>
            <li><a href="meeting_form.php">Call a Meeting</a></li>
            <li><a href="logout.php">Log out</a></li>
            </ul>
            </div>
          </div>
          <!-- end image plus menu -->
          </li>
	</ul>
   </div>
   
   <!-----end bar ----->
   
   
   <?php
   include 'db.php';
   ?>
   
   <?php
   $get_noti_qwr = "select * from notification where seen_unseen = '0'";
	$qry = mysqli_query($mysqli,$get_noti_qwr);
	while ($r=mysqli_fetch_array($qry))
		 {
			echo $r["msg"];
		 } 
		
		$update_query = "update notification SET seen_unseen='1' where seen_unseen='0' ";
		mysqli_query($mysqli,$update_query);
		
   
   ?>