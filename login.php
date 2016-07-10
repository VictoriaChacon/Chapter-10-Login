<?php

$hn ='localhost';
$db ='publications';
$un ='vchacon8';
$pw ='tourovergratebrisksial';

?>

<?php

require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);
?>

