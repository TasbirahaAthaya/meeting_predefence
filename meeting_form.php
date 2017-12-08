<?php
  session_start();
   include 'db.php';
 ?>
  
<?php
	$get_noti_qwr = "select * from notification where seen_unseen = '0'";
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
   
   
   
   
    <!-- meeting form-->
    <div style="background-color:white; height:auto; width:900px; margin-left:250px; margin-top:50px; margin-bottom:20px"> 
    <div style="background-color:white;height:60px; width:700px; padding-left:50px; padding-top:.5px"><h3 class="tab_header">     Meeting Form </h3></div>
    <hr>
    
     <form  action="noti.php" method="post" enctype="multipart/form-data" style="padding-bottom:50px; margin-left:50px; margin-right:250px">
      <div class="form-group">
      <label for="date">Meeting ID:</label>
      <input type="text" class="form-control" id="name" name="id" required placeholder="Enter Meeting ID">
      </div>
      <br>
     
      <div class="form-group">
      <label for="date">Meeting Name:</label>
      <input type="text" class="form-control" id="name" name="name" required placeholder="Enter Meeting Name">
      </div>
      <br>
      <div class="form-group">
      <label for="date">President:</label>
      <input type="text" class="form-control" id="name" name="n" required placeholder="Enter name of the President">
      </div>
      <br>
       
      <div class="form-group">
       <label for="date">Meeting Type:</label><br>
       <input type="radio" name="type" value="Departmental" checked> Departmental<br>
       <input type="radio" name="type" value="Inter-departmental"> Inter-departmental<br>
       <input type="radio" name="type" value="Inter-university"> Inter-university
       </div>
       <br>
       
        <div class="form-group">
      <label for="date">Meeting Objective:</label>
      <input type="text" class="form-control" id="name" name="obj" placeholder="Whats the Main Obejective">
      </div>
      <br>
      
      <div class="form-group">
      <label for="date">Venue:</label>
      <input type="text" class="form-control" id="name" name="venue" required placeholder="Venue of the Meeting">
      </div>
      <br>
      
      
      <div class="form-group">
      <label for="date">Meeting holding date</label>
      <input type="text" class="form-control" id="name" name="date" required placeholder="Meeting Date">
      </div>
      <br>
      
      
      <div class="form-group">
      <label for="date">Meeting holding Time</label>
      <input type="text" class="form-control" id="name" name="time" required placeholder="Meeting Time">
      </div>
      <br>
      
      
      
      <div class="form-group">
      <label>Who are going to attend in this meting?</label>
      <div style="overflow:scroll; height:auto; width=auto">
       <input type="checkbox" name="check_list[]" value="Munira"><label>Munira</label><br/> <!-- bookmark kora ache-->
       <input type="checkbox" name="check_list[]" value="Java"><label>Afsana</label><br/>
       <input type="checkbox" name="check_list[]" value="Athaya"><label>Athaya</label><br/>
       <input type="checkbox" name="check_list[]" value="Java"><label>Afsana</label><br/>
       <input type="checkbox" name="check_list[]" value="Athaya"><label>Athaya</label><br/>
       </div>
      </div>
      <br>
     
    <input type="text" name="name1" />
    <div class="form-group">
      <label for="date">Agenda:</label>
	<input type="file" name="file" />
    </div>
    <br>
    
    
    
	<button type="submit" name="btn-upload">upload</button>
	</form>
    <br /><br />
    <?php
	if(isset($_GET['success']))
	{
		?>
        <label>File Uploaded Successfully...  <a href="noti1.php">click here to view file.</a></label>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading !</label>
        <?php
	}
	else
	{
		?>
        <label>Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</label>
        <?php
	}
	?>
<!--</div>-->
   </body>
   </html>