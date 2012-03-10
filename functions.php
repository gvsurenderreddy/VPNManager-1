<?php
$uuser = "www-data"; //*nix username for account with to add OpenVPN users.

function viewKeys(){

}

function addUser($username, $password){
	exec("sudo adduser $username", $out);
	print $out;
}

var_dump(addUser("testbox", "cheese"));
?>