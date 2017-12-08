<?php
include 'db.php';
session_start();
$name= $_GET['nama'];
/*$decoded = base64_decode($base64);
$file = 'invoice.pdf';
file_put_contents($file, $decoded);

if (file_exists($file)) {*/
    header('Content-Description: File Transfer');
    header('Content-Type: application/force-download');
    header("Content-Disposition: attachment; filename=\"" . basename($name) . "\";");
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($name));
    ob_clean();
    flush();
    readfile($name); //showing the path to the server where the file is to be download
//}
exit;
?>