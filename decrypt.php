<?php

include 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>File Upload and view With PHP and MySql</title>
</head>
<body>
<table width="80%" border="1">
<tr>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>
    </tr>
    <?php
 $sql="SELECT * FROM tbl_uploads";
 $result_set=mysqli_query($mysqli,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
        <tr>
        <td><?php echo base64_decode($row['file']) ?></td>
        <td><?php echo base64_encode($row['type']) ?></td>
         <td><?php echo base64_encode($row['size']) ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
 }
 ?>
</table>
</body>
</html>
