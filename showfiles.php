<!DOCTYPE html>
<?php
session_start();
include 'db.php';
?>

<?php
$a1=$_SESSION["username"];
$get_noti_qwr = "select * from notification where seen_unseen = '0' AND name='$a1' ";
$qry = mysqli_query($mysqli,$get_noti_qwr);
$count=mysqli_num_rows($qry);

$qry="SELECT * FROM person where username='$a1' ";
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
                    <li><a href="meeting_form.php">Call a Meeting</a></li>

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


<br>
<br>
<br>
<br>
<br>

</head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 200px;
  bottom: 0;
  height: inherit;
}
div.scroll {
    background-color: #CFD8DC;
	width: 1050px;
    height: 200px;
    overflow-y: scroll;
    overflow-x: hidden;
}

</style>
</body>
<body>
<!-- Sidebar  show attendees-->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
    </a>
  <h3 class="w3-bar-item"><b>Attendees List</b></h3>
  <?php
  $m_id= $_REQUEST['id'];
  $query = "SELECT distinct p_id FROM attendees WHERE m_id='$m_id'";
			$st=mysqli_query($mysqli, $query);
			                $ctr=1;
            while(($row = mysqli_fetch_assoc($st))!=FALSE)
               {
					echo "<a class=\"\" style=\"margin-left:20px\">".$row['p_id']."</a>
					<br></br>
					";
					$ctr=$ctr+1;
			   }
  ?>
  <!-- Sidebar end show attendees-->
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:280px" id="myOverlay">
<style>
input[type="file"]{
    float: left;
    text-align:right;
   margin: 0px 0px 0px 0px;

}
input[type="file"]::-webkit-file-upload-button{
   -webkit-appearance: none;
   float: right;
   margin: 10px -740px 0px 10px;
   border: 1px solid #aaaaaa;
   border-radius: 4px;
   background-image: -webkit-gradient(linear, left bottom, left top, from(#d2d0d0), to(#f0f0f0));
   background-image: -moz-linear-gradient(90deg, #d2d0d0 0%, #f0f0f0 100%);
}

/* Remove margins and padding from the list */
ol {
    margin-right: 200px;
    padding: 0;
}

/* Style the list items */
ol li {
    cursor: pointer;
    position: relative;
    padding-left: 40px;
    list-style-type: none;
    background: #FFFFFF;
    font-size: 18px;
    transition: 0.2s;

    /* make the list items unselectable */
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Set all odd list items to a different color (zebra-stripes) */
ol li:nth-child(odd) {
    background: #8a9da9;
}

/* Darker background-color on hover */
ol li:hover {
    background: #ddd;
}
/* Style the close button */
.close {
    position: absolute;
    right: 0;
    top: 0;
   padding-right: 20px;
}

.close:hover {
    background-color: #9dacc2;
    color: black;
}

</style>
<div class="scroll">

    <?php

    $query_res = "SELECT resolution_up FROM uploader WHERE meeting_id='$m_id'";
    $st1=mysqli_query($mysqli, $query_res);
    //echo $st1;
    while($row3 = mysqli_fetch_assoc($st1))
    {
        if($row3['resolution_up'] == $a1)
    {
        echo
    "<form action=\"showfiles.php?id=$m_id\" method=\"POST\" enctype=\"multipart/form-data\" id=\"cmtform\">
    <input type=\"file\"  name=\"file\"><br><br>
    <input type=\"submit\" name=\"submit1\" value=\"Upload File\" onclick=\"location.href=''\" 
	       style=\"background-color:#E0D0D1;margin-left:20px; margin-top:0px; height:40px; width:100px;float:right;\">
    </form>";


//-- File upload--
if(isset($_POST['submit1'])){
    $name = base64_encode($_FILES['file']['name']);
    $size =base64_encode($_FILES['file']['size']);
    $type = base64_encode($_FILES['file']['type']);

$tmp_name = $_FILES['file']['tmp_name'];
$error = $_FILES['file']['error'];

 $a=$_SESSION["username"];
    //$m_id=$_POST['id'];
    //echo $m_id;

    if (isset ($name)) {
    if (!empty($name)) {

    $location = 'uploadBooks/';

    if  (move_uploaded_file($tmp_name, $location.$name)){
        echo "<script>alert(\"Successfully Uploaded!\");</script>";

        $d=date("Y-m-d");
        date_default_timezone_set("Asia/Dhaka");
        $t=date("h:i:sa");

        $insert = "INSERT INTO resolution (res_file,date,time,meeting_id,uploader_name,res_size,res_type) 
                VALUES ('$name','$d','$t','$m_id','$a','$size','$type')";
        $result = mysqli_query($mysqli,$insert);
        }

         else {
        echo 'Please choose a file!';
          }}



 /*	if($result) {
		echo "success";
	} else {
		echo "failed";
	}*/

    }
}

  break; }}
?>
<!--show files-->
	<div class="container">
    	<h3><b>Resolution</b></h3>

        <div class="row" style="margin-left:20px">
		<?php
			$sql = "SELECT distinct res_id,res_file,res_size,res_type FROM resolution where res_file!='' && meeting_id='$m_id' ";
	        $result = mysqli_query($mysqli,$sql);
	        $c=0;
		while($row = mysqli_fetch_assoc($result))
        {
            $fname=base64_decode($row['res_file']);
            base64_decode( $row['res_size']);
            base64_decode( $row['res_type']);
            ?>
            <div class="">
                    <?php $fname;?>
                    <div class="">
					<?php

                    //echo $f_id;

					echo "<form action='showfiles.php' method=\"POST\">"; echo "<ol id=\"myOL\" type=\"1\"><li>";
					//echo $fname;
                    echo "<a href='download.php?nama=uploadBooks/".base64_decode($row['res_file'])
                        ."' download>".base64_decode($row['res_file'])."</a> ";
					echo"</li></ol></form>";
                    $f_id=$row['res_id'];

           /* echo "<input  type=image src=img/delete.png alt=\"Submit feedback\" name=\"submit2\" value=\"Delete\"
	       style=\"background-color:;margin-left:10px; margin-top:0px; height:10px; \"></form>";
            if(isset($_POST['submit2']))
            {
                echo $f_id;
                $sql_del = "DELETE FROM resolution where uploader_name='afsana1313' && meeting_id='3' && res_id='$f_id' ";
                unlink("uploadBooks/" . $row['res_file']);// Delete the file from server
                if(mysqli_query($mysqli,$sql_del)==true)
                {
                    echo "Record deleted successfully";
                } else {
                    echo "Error deleting record: " . mysqli_error($mysqli);
                }

            }*/
					?>
					</div>
                <a href="uploadBooks/<?php echo $row['res_file'];?>" target="_blank"></a>
            </div>
            <?php } ?>
            <script>
                var rid = "<?php echo $m_id ?>";
                // Create a "close" button and append it to each list item
                var myNodelist = document.getElementsByTagName("LI");
                var i;
                for (i = 0; i < myNodelist.length; i++) {
                    var span = document.createElement("SPAN");
                    var txt = document.createTextNode("\u00D7");
                    span.className = "close";
                    span.appendChild(txt);
                    myNodelist[i].appendChild(span);
                }

                // Click on a close button to hide the current list item
                var close = document.getElementsByClassName("close");
                var i1,count=0;
                for (i1 = 0; i1 < close.length; i1++) {
                    close[i1].onclick = function() {
                        var div = this.parentElement;
                        div.style.display = "none";
                        // function below will run clear.php?h=count,id=rid
                        $.ajax({
                            type: "GET",
                            url: "clear.php" ,
                            data: { h: count,id:rid },
                            success : function() {
                                // here is the code that will run on client side after running clear.php on server
                                count++;
                                // function below reloads current page
                                location.reload();

                            }
                        });
                        return false;
                    }
                }
                </script>

        </div>

    </div>
<!--end of show resolution files-->
</div>
<br></br>


<div class="scroll" >
    <!--show agenda files-->
    <div class="container">
        <h3><b>Agenda</b></h3>

        <div class="row" style="margin-left:20px">
            <?php
            $sql_ag = "SELECT distinct ag_id,ag_file FROM agenda where ag_file!='' && meeting_id='$m_id' ";
            $result_ag = mysqli_query($mysqli,$sql_ag);
            $c=0;
            while($row = mysqli_fetch_assoc($result_ag))
            {
                $ag_name=base64_decode($row['ag_file']);
               // base64_decode( $row['ag_size']);
               // base64_decode( $row['ag_type']);
                ?>
                <div class="">
                    <?php $ag_name;?>
                    <div class="">
                        <?php

                        //echo $f_id;

                        echo "<form action='showfiles.php' method=\"POST\">"; echo "<ol id=\"myOL\" type=\"1\"><li>";
                        //echo $fname;
                        echo "<a href='download.php?nama=uploads/".base64_decode($row['ag_file'])
                            ."' download>".base64_decode($row['ag_file'])."</a> ";
                        echo"</li></ol></form>";
                        $f_id=$row['ag_id'];

                        ?>
                    </div>
                    <a href="uploads/<?php echo $row['ag_file'];?>" target="_blank"></a>
                </div>
            <?php } ?>

        </div>

    </div>
    <!--end of show agenda files-->
</div>
<br></br>
<div class="scroll" ><h3 style="margin-left:20px"><b>Follow-up</b></h3></div>
<br></br>
<div class="scroll" ><h3 style="margin-left:20px"><b>Discussion</b></h3></div>
<!-- END MAIN -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>
