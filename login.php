
<?php
if (isset($_SESSION['userid'])){

		echo $_SESSION['username'];
		echo $_SESSION['userid'];
} else {
  echo '
          <form class="container" action="logging.php" method="post">
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="pw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pw">

            <button type="submit" name ="logon">Login</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>

            <div style="margin: 20px; width: 100%">
              <a href="#" style="float: left">Forgot Password?</a>
              <a href="register.php" style="padding-right:40px; float: right">Create Account</a>
            </div>
          </form>
        ';
}
	
?>