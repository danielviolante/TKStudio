

<?php
if(isset($_POST['register'])) {
	require 'dbconnector.php';
	$username = $_POST['username'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$dob = $_POST['dob'];
	$email = $_POST['email'];
	$pw = $_POST['pw'];
	$confpw = $_POST['confpw'];
	
	//Header for Errors
	$errorheader = '"username=".'.$username.'."&fname=".'.$fname.'."&lname=".'.$lname.'."&dob=".'.$dob.'."&email=".'.$email.'."&pw=".'.$getpw.'."&confpw=".'.$getconfpw.';';

//this code is used to store a variable of whether the pw/confpw fields are empty, without having to pass the actual password
	if (!$pw == NULL){
		$getpw = 1;
	}else{
		$getpw = 0;
	}
	if (!$confpw == NULL){
		$getconfpw = 1;
	}else{
		$getconfpw = 0;
	}
	
if (empty($username) || empty($dob) ||  empty($pw) || empty($confpw)|| empty($email)){

		// header("Location: ../register.php?error=emptyfields&username=".$username."&fname=".$fname."&lname=".$lname."&dob=".$dob."&email=".$email."&pw=".$getpw."&confpw=".$getconfpw);
		header("Location: ../register.php?".$errorheader);
		 exit();
	
 }
		else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header("Location: ../register.php?error=invalidmail&username=".$username."&fname=".$fname."&lname=".$lname."&dob=".$dob);
			exit();
	
}
        else if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
			header("Location: ../register.php?error=invalidusername&fname=".$fname."&lname=".$lname."&dob=".$dob);
			exit();
	
}
		else if ($pw !== $confpw) {
			header("Location: ../register.php?error=checkpw&username=".$username."&fname=".$fname."&lname=".$lname."&dob=".$dob."&email=".$email);
			exit();
	
}else{
	//CLEAN THIS SHIT UP!!!!!!!!
	$sql = "SELECT * FROM account WHERE username = ?";
	$stmt = mysqli_stmt_init($AccountConnection);
		if (!mysqli_stmt_prepare($stmt, $sql))
		{
			header("Location: ../register.php?error=sqlerror&");
			exit();
		}else{
			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultcheck = mysqli_stmt_num_rows($stmt);
			if($resultcheck > 0) {
				header("Location: ../register.php?error=usernametaken&fname=".$fname."&lname=".$lname."&dob=".$dob."&email=".$email);
				exit();
			}else{
			$sql = "SELECT * FROM account WHERE email = ?";
	$stmt = mysqli_stmt_init($AccountConnection);
		if (!mysqli_stmt_prepare($stmt, $sql))
		{
			header("Location: ../register.php?error=sqlerror&");
			exit();
		}else{
			mysqli_stmt_bind_param($stmt, "s", $email);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultcheck = mysqli_stmt_num_rows($stmt);
			if($resultcheck > 0) {
				header("Location: ../register.php?error=emailtakenfname=".$username."&fname=".$fname."&lname=".$lname."&dob=".$dob);
				exit();
			}else{
				$sql = "INSERT INTO account (username, first_name, last_name, dob, email, password) VALUES (?, ?, ?, ?, ?, ?)";
				$stmt = mysqli_stmt_init($AccountConnection);
					if (!mysqli_stmt_prepare($stmt, $sql)) {
						header("Location: ../register.php?error=sqlerror");
						exit();
					}else{
						$encrypted = password_hash($pw, PASSWORD_DEFAULT);
						$query = mysqli_stmt_bind_param($stmt, "ssssss", $username, $fname, $lname, $dob, $email, $encrypted);
						mysqli_stmt_execute($stmt);
						header("Location: ../register.php?signup=success");
				}
			}
		}
		
	}
  }
}
	mysqli_stmt_close($stmt);
	mysqli_close($AccountConnection);
}
//else forces them to use signup form
else{
	header("Location: ../register.php");
}

?>