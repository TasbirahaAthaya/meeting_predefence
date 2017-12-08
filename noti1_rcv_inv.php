<?php
 
 include  'db.php';
 ?>
 
 <?php
 
 foreach($_POST['check_list'] as $selected)
 {
	 $ar[]=$selected;
     //echo $selected."</br>";
     
 }
 
 $length=count($ar);