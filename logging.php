<?php
	if (isset($_POST['logon'])) {
		require 'dbconnector.php';
		$username = $_POST['username'];
		$pw = $_POST['pw'];
		if (empty($username) ||  empty($pw))
		{
			header("Location: ../index.php?error=emptyfields&username=".$username);
			 exit();
	} else {
		$sql = "SELECT * FROM account WHERE username = ? or email = ?;";

		$stmt = mysqli_stmt_init($AccountConnection);

		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../index.php?error=sqlerror&");
			exit();

		} else {
			mysqli_stmt_bind_param($stmt, "ss", $username, $username);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);

			if($row = mysqli_fetch_assoc($result)) {
				$decryptpw = password_verify($pw, $row['password']);

				if ($decryptpw == false) {
					header("Location: ../index.php?error=wronginfo&username=".$username);
					exit();

				} else if ($decryptpw == true){

					if($row['email_confirm'] == 1) {
						session_start();
						$_SESSION['username'] = $row['username'];
						$_SESSION['userid'] = $row['account_id'];
						echo 'it works';

					} else if ($row['email_confirm'] == 0) {
						header("Location: ../index.php?error=unconfirmedmail&username=".$username);
						exit();	
					}
					header("Location: ../index.php?login=success");

				} else {
					header("Location: ../index.php?error=wronginfo&username=".$username);
					exit();	
				}
			}
		}	
	}
		mysqli_stmt_close($stmt);
		mysqli_close($AccountConnection);
	} else {
		header("Location: ../index.php");
	}

	//

					// 
	//else forces them to use signup form

?>

