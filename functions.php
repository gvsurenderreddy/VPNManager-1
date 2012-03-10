<?php
$uuser = "www-data"; //*nix username for account with to add OpenVPN users.

function viewKeys(){

}

function addUser($username, $password){
	exec("adduser -u $username -p $password -g users -s /bin/bash", $out);
	print var_dump($out);
}

?>