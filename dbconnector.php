<?php
//Basic Connection Information
$servername = "localhost";
$dbuser = "taffy";
$dbpw = "test"; 		//change this when testing

//ACCOUNTS DB
$accountdb = "accounts";
$AccountConnection = mysqli_connect ($servername, $dbuser, $dbpw, $accountdb);


//CONNECTION TESTER (LEAVE COMMENTED)
// if (!$AccountConnection) {
	
	// die("conn failure".mysqli_connect_error());
// } 

?>