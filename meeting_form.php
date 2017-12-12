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

$sql="SELECT * FROM PERSON";
$result1=mysqli_query($mysqli,$sql);


//echo $_SESSION["name"]." ".$_SESSION["pass"];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Webslesson Tutorial | How to Use Bootstrap Select Plugin with PHP JQuery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
    <script>
        /*$(document).ready(function(){
         $('.selectpicker').selectpicker();

         $('#framework').change(function(){
          $('#hidden_framework').val($('#framework').val());
         });

         $('#multiple_select_form').on('submit', function(event){
          event.preventDefault();
          if($('#framework').val() != '')
          {
           var form_data = $(this).serialize();
           $.ajax({
            url:"m.php",
            method:"POST",
            data:form_data,
            success:function(data)
            {
             //console.log(data);
             $('#hidden_framework').val('');
             $('.selectpicker').selectpicker('val', '');
             alert("Meeting created and notice sent");
             window.location.href='blog.php?success';
            // alert(data);
            }
           })
          }
          else
          {
           alert("Please select framework");
           return false;
          }
         });
        });*/
    </script>
</head>
<body style="margin:0; background-image:url(EMPC-meeting-phoht.jpg); background-repeat:no-repeat; background-size:cover">


<!------bar-------->

<div style="margin:0;margin-bottom:0px; padding-bottom:0px;height:60px; background-color:#e8e8e8; margin-top:00px;         padding-top:10px">
    <h3 style="margin-left:140px; font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; padding-left:30px; padding-bottom:20px; color:blue; position:absolute; padding-top:10px">      Security based Meeting Scheduling and Documents Management System</h3>
    <img src="img/logo2.jpg" style="height:100px; width:130px; margin-left:30px" class="img-circle" alt="site logo" />

</div>

<div class="n" style="margin:0;margin-bottom:0px; padding-bottom:0px;height:50px; margin-left:0px; margin-right:0px">
    <ul style="margin:0px;background-color:#e8e8e8; padding-left:500px; padding-top:20px">

        <div class="dropdown" style="margin-left:680px; height:40px">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="background-color:            transparent; color:black; border:hidden"><?php echo $b;?>
                <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="profile.php">My Account</a></li>
                <li><a href="edit.php">Edit profile</a></li>
                <li><a href="meeting_form_trial.php">Call a Meeting</a></li>
                <li><a href="notice.php">Notices</a></li>
            </ul>
            <a href="logout.php">
                <img src="img/logout.png" style="height:30px; width:30px; margin-left:10px" alt="HTML tutorial" style="width:42px;height:42px;border:0;">
            </a>
        </div>
        <!-- end image plus menu -->




    </ul>
</div>
<html>
<head>
    <title>Webslesson Tutorial | Bootstrap Modal with Dynamic MySQL Data using Ajax & PHP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
</html>
<div style="background-color:#e8e8e8; height:auto; width:900px; margin-left:250px; margin-top:50px; margin-bottom:20px">
    <div style="background-color:#e8e8e8;height:60px; width:700px; padding-left:50px; padding-top:.5px"><h3 class="tab_header">     Meeting Form </h3></div>
    <hr>
    <form  action="meeting_form.php" method="post" id="multiple_select_form" enctype="multipart/form-data" style="padding-bottom:50px; margin-left:50px; margin-right:250px;">
        <div class="form-group">

            <div class="form-group">
                <label for="date">Meeting holding date</label>
                <input type="date" class="form-control" id="name" name="date" required placeholder="Meeting Date">
            </div>
            <br>

            <div class="form-group">
                <label for="date">Meeting holding Time(start time)</label>
                <input type="time" class="form-control" id="name" name="stime" required placeholder="Enter starting Time">
            </div>
            <br>

            <div class="form-group">
                <label for="date">Meeting holding Time(end time)</label>
                <input type="time" class="form-control" id="name" name="etime" required placeholder="Enter ending Time">
            </div>
            <br>


            <div class="form-group">
                <label for="date">Meeting Name:</label>
                <input type="text" class="form-control" id="name" name="name" required placeholder="Enter Meeting Name">
            </div>
            <br>
            <div class="form-group">
                <label for="date">Conveyor:</label>
                <input type="text" class="form-control" id="name" name="con" required placeholder="Enter name of the conveyor">
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

            <label for="date">Meeting Attendees are:</label>
            <select name="check[]" id="framework" class="form-control selectpicker" data-live-search="true" multiple>
                <option value="All Head">All Head </option>
                <option value="All G2">All G2 </option>
                <option value="All Lecturer">All Lecturer </option>
                <?php while($row=mysqli_fetch_assoc($result1)){ ?>

                    <option value="<?php echo $row['username']?>"><?php echo $row['username']?> </option>
                <?php } ?>
            </select>
            <br /><br />
            <input type="hidden" name="hidden_framework" id="hidden_framework" />


            <div class="form-group">
                <label for="date">Venue:</label>
                <input type="text" class="form-control" id="name" name="venue" required placeholder="Venue of the Meeting">
            </div>
            <br>

            <div class="form-group">
                <label for="date">Agenda:</label>
                <input type="file" name="file" />
            </div>
            <input type="submit" name="submit" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-info" value="Submit" />
        </div>
    </form>
    <br />

</div>
</div>
</body>
</html>

////////////start code for automation///////////////////////
//echo $stime."to".$etime."<br>";
$f=0;
$c=0;
$dur=$etime-$stime;
//echo $dur;
$j="08:00:00";
for($i=1;$j<="15:00:00";$i++)
{
$s[0][$i]=$j;
//echo $s[0][$i];
//  echo " +++";
$j=$j+$dur;
$c++;
}
//echo $c;
for ($i = 1; $i <$c_a+1; $i++)
{
for($j=1;$j<=$c;$j++)
{
$s[$i][$j]="0";
}
}


for ($i = 1; $i <$c_a+1; $i++) {
$j=0;

$qry = "SELECT m_id FROM attendees where p_id='$a[$i]' ";
$result = mysqli_query($mysqli, $qry);
while ($row = mysqli_fetch_assoc($result)) {
if($row["m_id"])
{
/*echo "^^^^";
echo $row["m_id"];
echo "^^^^";*/
$m=$row["m_id"];
$qry1 = "SELECT stime,etime FROM meeting where M_id='$m' ";
$result1 = mysqli_query($mysqli, $qry1);
while ($row1 = mysqli_fetch_assoc($result1)) {
if($stime>="01:00:00" && $stime<="03:00:00") {
$stime = $stime + "12:00:00";
//  echo $stime;
}
if($etime>="01:00:00" && $etime<="03:00:00") {
$etime = $etime + "12:00:00";
}
if($row1["stime"]>="01:00:00" && $row1["stime"]<="03:00:00") {
$row1["stime"] = $row1["stime"] + "12:00:00";
}
if($row1["etime"]>="01:00:00" && $row1["etime"]<="03:00:00") {
$row1["etime"] = $row1["etime"] + "12:00:00";
}
//  echo $row1["stime"];
for($j=1;$j<=$c;$j++)
{
/*echo  "<br>";
echo $row1["stime"];
echo  "<br>";
echo $row1["etime"];
echo "<br><br>";
echo $s[0][$j];
echo"pp*";*/
// echo $j;
if($s[0][$j]=="08:00:00")
{
$s[0][$j]=8;
}
if(($s[0][$j]==$row1["stime"] || $s[0][$j]==$row1["etime"]))
{
$s[$i][$j]="1";
/*echo $s[0][$j];
echo "<br><br>--";
echo $s[$i][$j];*/
/*echo"pp";
echo $s[0][$j+"1"];*/
}

}

if(($stime>=$row1["stime"] && $stime<=$row1["etime"])||($etime>=$row1["stime"] && $etime<=$row1["etime"]))
{
//  echo "conflict ";
$f=1;
}

//      break;
}
//    break;
}
//  break;
}
//break;
}
if($f==0)
{
//    echo  "<script>alert('No Conflict. Press OK to schedule your meeting');</script>";
$file = base64_encode(rand(1000,100000)."-".$_FILES['file']['name']);
$file_loc = $_FILES['file']['tmp_name'];
$file_size = base64_encode($_FILES['file']['size']);
$file_type = base64_encode($_FILES['file']['type']);
$folder="uploads/";

move_uploaded_file($file_loc,$folder.$file);


$username=$_SESSION['username'];
date_default_timezone_set('Asia/Dhaka');
$d=date("y-m-d");
$t=date("h:i:sa");
$query1 = "INSERT INTO meeting(M_name,task,date,location,stime,type,etime,meeting_caller) VALUES ('$name','$obj','$date','$loc','$stime','$type','$etime','$username')";
$r1=mysqli_query($mysqli,$query1);
if($r1){echo "yes";echo $mysqli->insert_id;}
else echo mysqli_error('$mysqli');
//header("Location: blog-post.php");
//}

//echo LAST_INSERT_ID($query1);
$id= $mysqli->insert_id;
echo "id:".$id;
$sql="INSERT INTO agenda(ag_file,date,meeting_id,time,uploader_name) VALUES('$file','$d','$id','$t','$username')";
if(mysqli_query($mysqli,$sql)){
echo'yyyy';

}
else echo mysqli_error($mysqli);
foreach($_POST['check'] as $selected){
echo $selected."</br>";
$query = "INSERT INTO attendees(p_id,m_id,m_name) VALUES ('$selected','$id','$name')";
$r=mysqli_query($mysqli,$query);
if($r){echo "yes"; header("Location:blog-post.php");}
else echo mysqli_error($mysqli);

}
//echo $time."<br>";
}
//echo "<br>";
//echo $s[0][1];
/*for($i=1;$i<$c_a+1;$i++)

{
for($j=1;$j<=$c;$j++)
{
echo $s[$i][$j];
echo " ";
}
echo "<br>";
}*/
if($f==1) {
for ($i = 1; $i < $c_a+1; ) {
for ($j = 1; $j <= $c;) {
if($s[$i][$j]=="0")
{
$i++;
$p=$j;
}
else
$j++;
if($i==$c_a+1 && $p==$j)
{
if($j-1<8)
{
$t1=$s[0][$j];
$t2=$s[0][$j+1];
echo $t1;
echo " to ";
echo $t2;

echo  "<script>alert(\"Conflict. You can schedule meeting between $t1:00AM to $t2:00AM\");
</script>";
}
else{
$t1=$s[0][$j-1];
$t2=$s[0][$j];
echo $t1;
echo " to ";
echo $t2;

echo  "<script>alert(\"Conflict. You can schedule meeting between $t1:00AM to $t2:00AM\");
</script>";}
//   header("Location:meeting_form.php");
break;
}

}

}
}
