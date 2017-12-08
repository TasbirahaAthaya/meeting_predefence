<?php
session_start();
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
		//echo $g;
	}
	
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
      
     <div class="n" style="margin:0;margin-bottom:0px; padding-bottom:0px;height:40px">
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
   
   
   
   
   
   

<div style="background-color:white; height:700px; width:900px; margin-left:250px; margin-top:100px"> 
    <div style="background-color:white;height:60px; width:700px; padding-left:50px; padding-top:.5px"><h3 class="tab_header">User     Profile </h3></div>
    <hr>
    <form name="form1" action="edit_pro.php" method="post" enctype="multipart/form-data">
 <table class="table table-user-information" style="width:700px; margin-left:50px">
                    <tbody>
                       <tr>
                       <td>
                       picture:</td>
                       <td>
                       
                       <input type="file" name="file" value="<?php echo $g;?>"></td>
                       </tr>
                       
                        <tr>
                        <td>Name:</td>
                        <td><?php echo $a;?></td>
                        </tr>
                        
                        <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username" style="border:hidden" value="<?php echo $b;?> "></td>
                        </tr>
                      
                      <tr>
                        <td>Address:</td>
                        <td><input type="text" name="address" style="border:hidden" value="<?php echo $c;?> "></td>
                      </tr>
                      
                      <tr>
                        <td>Email:</td>
                        <td><?php echo $d;?></td>
                      </tr>
                      
                      <tr>
                        <td>Phone no:</td>
                        <td><input type="text" name="phone_no" style="border:hidden" value="<?php echo $e;?> "></td>
                      </tr>
                      
                      <tr>
                        <td>NID:</td>
                        <td><input type="text" name="nid" style="border:hidden" value="<?php echo $f;?> "></td>
                      </tr>


        </tbody>
    </table>
<!--<input type="submit" name="upload" value="upload image">-->
<button type="submit" name="submit" class="btn btn-default" style="margin-left:50px">Submit</button>
</form>
                  
               
            </div>
            </div>

</body>
</html>