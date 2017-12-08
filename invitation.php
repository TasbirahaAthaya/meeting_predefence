<?php
session_start();
   include 'db.php';
   $type=$_POST['type'];
 $venue=$_POST['venue'];
 $time=$_POST['time'];
 $date=$_POST['date'];
 echo $type;
 
 ?>
  
<?php
$a=$_SESSION["name"];
	$get_noti_qwr = "select * from notification where seen_unseen = '0' AND name='$a' ";
	$qry = mysqli_query($mysqli,$get_noti_qwr);
	$count=mysqli_num_rows($qry);
	
?>



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
<title>Security based Meeting Scheduling and Documents Management System</title>
</head>

<body style="margin:0; background-image:url(EMPC-meeting-phoht.jpg); background-repeat:no-repeat; background-size:cover">


      <!------bar-------->
      
        <div style="margin:0;margin-bottom:0px; padding-bottom:0px;height:60px; background-color:#e8e8e8; margin-top:00px;         padding-top:10px">
      <h3 style="margin-left:140px; font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; padding-left:30px; padding-bottom:20px; color:blue; position:absolute; padding-top:10px">      Security based Meeting Scheduling and Documents Management System</h3>
      <img src="img/logo2.jpg" style="height:100px; width:130px; margin-left:30px" class="img-circle" alt="site logo" />
               
      </div>
      
     <div class="n" style="margin:0;margin-bottom:0px; padding-bottom:0px;height:50px; margin-left:0px; margin-right:0px">
     <ul style="margin:0px;background-color:#e8e8e8; padding-left:500px; padding-top:20px">
           <li ><a href="#" style="font-size:20px" >Contact</a></li>
           <li><a href="#" style="font-size:20px" >About Us</a></li>
           <li>
           <div style="padding-left:0px">
           <form action="notification_process.php" method="post" style="margin-left:200px">
           <input style="<?php 
			if($count > 0 ){
				echo "color: white;border:none;background-color: red;";
			} else echo "color:black";
		    ?>" type="submit" name="submit"  value="notification<?php echo '('.$count.')' ?>"/>
            </form>
            </div>
            </li>
            
           <!-- <li><img src="pro3.jpg" style=" height:40px; width:40px; margin-left:200px" class="img-circle"></li>-->
           
           <li>
            <div class="dropdown" style="margin-left:180px">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="background-color:            transparent; border:hidden"><?php echo $_SESSION["name"];?>
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
   
   
   
   <!--search bar-->
   <div style="float:right; margin-top:40px; margin-right:20px" >
   <form action="#" method="post">
    <input type="text" id="searchbox" name="search" value="search.."  size="20" maxlength="50">
    <input type="submit" name="submit" value="GO">
    </form>
    </div>
   <!-- end search bar-->
   
   
   
   <!-- name list-->
   <div style="margin:20;margin-bottom:70px; padding-top:20px;height:400px; background-color:rgba(190,201,192,1.00); margin-left:20px; margin-right:20px; margin-top:90px;   padding-top:10px">
   
   <form action="noti.php" method="post" style="margin-left:20px">
   <div style="overflow:scroll; height:90px; width=auto">
   <input type="checkbox" name="check_list[]" value="Munira"><label>Munira</label><br/> <!-- bookmark kora ache-->
   <input type="checkbox" name="check_list[]" value="Java"><label>Afsana</label><br/>
   <input type="checkbox" name="check_list[]" value="Athaya"><label>Athaya</label><br/>
   <input type="checkbox" name="check_list[]" value="Java"><label>Afsana</label><br/>
   <input type="checkbox" name="check_list[]" value="Athaya"><label>Athaya</label><br/>
   <input type="checkbox" name="check_list[]" value="Java"><label>Afsana</label><br/>
   <input type="checkbox" name="check_list[]" value="Athaya"><label>Athaya</label><br/>
   <input type="checkbox" name="check_list[]" value="Java"><label>Afsana</label><br/>
   <input type="checkbox" name="check_list[]" value="Athaya"><label>Athaya</label><br/>
   <input type="checkbox" name="check_list[]" value="Java"><label>Afsana</label><br/>
   <input type="checkbox" name="check_list[]" value="Athaya"><label>Athaya</label><br/>
   </div>
   <input type="submit" name="submit" value="Submit"/>
   </form>
   </div>
   
   
   
   
   </div><!--main-->
   <div style="height:400px; background-color:#e8e8e8; margin-bottom:0px"></div>
   
   </body>
   </html>