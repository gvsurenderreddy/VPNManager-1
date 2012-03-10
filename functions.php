<?php
$uuser = "www-data"; //*nix username for account with to add OpenVPN users.

function viewKeys(){

}

function addUser($username, $password){
	exec("sudo adduser $username", $out);
	print var_dump($out);
}

?>