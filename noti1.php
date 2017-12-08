<?php
include_once 'db.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Uploading With PHP and MySql</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
<label>File Uploading With PHP and MySql</label>
</div>
<div id="body">
	<table width="80%" border="1">
    <tr>
    <th colspan="4">your uploads...<label><a href="index.php">upload new files...</a></label></th>
    </tr>
    <tr>
    <td>File Name</td>
   <!-- <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>-->
    </tr>
    <?php
	$sql="SELECT * FROM notification";
	$result_set=mysqli_query($mysqli,$sql);
	while($row=mysqli_fetch_assoc($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['agenda'] ?></td>
       
        <td><a href="uploads/<?php echo $row['agenda'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
	}
	?>
    </table>
    
</div>
</body>
</html>