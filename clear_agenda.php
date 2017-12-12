<?php

session_start();
include 'db.php';
$a1=$_SESSION["username"];
$m=$_GET["h"];
$rid=$_GET["id"];
echo $a1;
echo $m;
echo $rid;
$c=0;
$sql = "SELECT distinct ag_id,ag_file FROM agenda where ag_file!='' && meeting_id='$rid' ";
$result = mysqli_query($mysqli,$sql);
while($row = mysqli_fetch_assoc($result)) {
    $f_id=$row['res_id'];
    //echo $c;
    if($c==$m)
    {
        $sql_del = "DELETE FROM agenda where uploader_name='$a1' && meeting_id='$rid' && ag_id='$f_id' ";
        unlink("uploadBooks/" . $row['res_file']);// Delete the file from server
        if(mysqli_query($mysqli,$sql_del)==true)
        {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . mysqli_error($mysqli);
        }
        $c++;}
}
?>