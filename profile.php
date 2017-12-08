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
	//echo $n;
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
   <link rel="shortcut icon" href="img/logo2.jpg" type="image/x-icon" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Security based Meeting Scheduling and Documents Management System</title>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 220px;
	height:550px;
    background-color: #f1f1f1;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
	text-align:left;
}

li a.active {
    background-color: #CDD09F;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
</style>
</head>

<body style="margin:0; background-image:url(EMPC-meeting-phoht.jpg); background-repeat:no-repeat; background-size:cover">


      <!------bar-------->
      
      <div style="margin:0;margin-bottom:0px; padding-bottom:0px;height:90px; background-color:#e8e8e8; margin-top:00px;         padding-top:10px">
      <h3 style="margin-left:140px; font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; padding-left:30px; padding-bottom:20px; color:blue; position:absolute; padding-top:10px">      Security based Meeting Scheduling and Documents Management System</h3>
      <img src="img/logo2.jpg" style="height:90px; width:120px; margin-left:30px; margin-top:0px; padding-top:0px"  class="img-circle" alt="site logo" />
      <img src="uploads/<?php echo $g ?>" style="height:50px; width:60px; margin-left:900px; margin-top:0px; padding-top:0px"  class="img-circle" alt="site logo" />
      <?php echo $b; ?><a href="logout.php">
  <img src="img/logout.png" style="height:30px; width:30px; margin-left:10px" alt="HTML tutorial" style="width:42px;height:42px;border:0;">
</a>
   <ul style="margin-left:10px; margin-top:40px">
  <li><a class="active" href="profile.php">My account</a></li>
  <li><a href="edit.php">Edit profile</a></li>
  <li><a href="meeting_form_trial.php">Call a meeting</a></li>
  <li><a href="meeting_form_trial.php">Change a meeting schedule</a></li>
  <li><a href="#">Cancel a meeting</a></li>
  <li><a href="#">Contact Us</a></li>
  <li><a href="#">About</a></li>
</ul>
               
      </div>
   
   <!------------end bar------->
      
    <!-- <div class="n" style="margin:0;margin-bottom:0px; padding-bottom:0px;height:40px">
     <ul style="margin:0px;background-color:#e8e8e8; padding-left:500px; padding-top:20px">
            
           <!-- <li><img src="pro3.jpg" style=" height:40px; width:40px; margin-left:200px" class="img-circle"></li>-->
           
          <!-- <li>
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
        <!-- </li>
	
          
	</ul>
   </div>-->
   
  
   
   
   <!-- button-->
   <!--<a href="meeting_form.php" style="float:right"><button style="background-color:#E0D0D1;margin-right:20px; margin-top:70px;     height:40px; width    :150px">Call a Meeting</button></a>
   <!-- end button-->
   
   
   
   
   <!-- button-->
  <!-- <a href="#" style="float:right"><button style="background-color:#E0D0D1;margin-right:20px; margin-top:70px; height:40px; width    :150px">Cancel a Meeting</button></a>
   <!-- end button-->
   
   
   
    <!-- profile form-->
    <div class="form-group" style="padding:0px; padding-left:30px; padding-right:20px; float:left">
    <div style="background-color:white; height:560px; width:800px; margin-left:260px; margin-top:50px; margin-bottom:90px; display:inline-block"> 
    <div style="background-color:white;height:60px; width:700px; padding-left:50px; padding-top:.5px"><h3 class="tab_header">User     Profile </h3></div>
    <hr>
    
                  <table class="table table-user-information" style="width:700px; margin-left:30px">
                    <tbody>
                       <tr>
                      <td></td>
                       <td><img src="uploads/<?php echo $g ?>" style="height:100px; width:100px" class="img-circle" target="_blank"></td>
                      </div>
                      <tr>
                        <td>Name:</td>
                        <td>
                         <?php 
						 echo $a; 
						  ?>
                        </td>
                      </tr>
                      <tr>
                        <td>Username:</td>
                        <td><?php   echo $b; ?></td>
                      </tr>
                      <tr>
                        <td>Address:</td>
                        <td>
                        <?php
						 echo $c;
						?>
                        
                        </td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Email:</td>
                        <td><?php 
						  echo $d;
						?></td>
                      </tr>
                        <tr>
                        <td>Phone No:</td>
                        <td>
                        <?php
						 echo $e;
						?>
                        </td>
                      </tr>
                      <tr>
                        <td>NID:</td>
                        <td>
                        <?php
						  echo $f;
                        ?>
                        </td>
                      </tr>
                        
                           
                      </tr>
                     
                    </tbody>
                  </table>
                 </div> 
                  
                </div>
   <!-- end profile form-->
   
   <div style="height:570px; width:290px; overflow:scroll; background-color:#cdd09f; display:inline-block; margin-top:50px; margin-bottom:80px; margin-left:20px">
  
   <table class="table">
   
    <thead>
      <tr>
        <th>Notices</th>
      </tr>
      
    </thead>
    
    
     <?php 
   for ($x = 0; $x <= 2; $x++){ ?>
   <table class="table">
   <tbody>
      <tr>
        <td>U have to upload the disscussion of 10th meeting</td>
        </tr>
        <tr>
        <td>U have to upload the disscussion of 10th meeting</td>
        </tr>
        
    </tbody>
    </table>
  </table>
  <?php }?>
   
   
   </div>
   </div>
<!--end-->
   <div style="height:400px; background-color:#e8e8e8"></div>
   
   
   
   
 </body>
 </html>