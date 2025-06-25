<?php
echo 'hello facebook'; 
$my_verify_token = "2576453712648736HIP";

$challenge = $_GET['hub_challenge'];
$verify_token = $_GET['hun_verify_token'];
if($my_verify_token === $verify_token){
	echo $challenge;
	exit();
}

?>
