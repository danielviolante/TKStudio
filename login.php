
<?php
if (isset($_SESSION['userid'])){

		echo $_SESSION['username'];
		echo $_SESSION['userid'];
} else {
  echo
    '<form action="logging.php" method="post">
      <div class="container">
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="pw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pw">

        <button type="submit" name ="logon">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>

      <table style = "width:100%;">
      <tr>
      <td style = "">
        <span class="psw"> <a href="#">Forgot Password?</a></span>
    	</td>
    	<td style = "">
    	<span class="psw"> <a href="register.php">Create Account</a></span>
    	</td>
    	</tr>
    	</table>
      </div>
    </form>';
  }
	
?>