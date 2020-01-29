
<?php
if (isset($_SESSION['userid'])){

		echo $_SESSION['username'];
		echo $_SESSION['userid'];
} else {
  echo '
          <div class="bg-light rounded-bottom p-5">
            <form action="logging.php" method="post">
              <div class="form-group">
                <label for="username">Username:</label>
                <input type="email" class="form-control" placeholder="Enter email" id="email">
              </div>
              <div class="form-group">
                <label for="pw">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" id="pw">
              </div>
              <div class="form-group form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox"> Remember me
                </label>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
            <div class="mx-auto pt-3">
              <div class="d-flex justify-content-between">
                <a href="forgotPass.html" class="my-auto">Forgot Password?</a>
                <input type="button" class="btn btn-primary" onclick="window.location.href = \'createAcc.html\';" value="Create Account"/>
              </div>
            </div>
          </div>
          
        ';
}
	
?>