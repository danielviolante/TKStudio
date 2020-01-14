<?php
    session_start();
?>
		
<html>
    <head>
        <title>Registration</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="../Loginclude.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <?php
        require "navigation.php";
        ?>
    </head>
    <body>
        <h1  class="homepagetitle">Register</h1>

        <div class="homepagecontainer">
            <div class="" style="margin:auto; width 600px;">
                <div style="width:50%; margin:auto;">
                    <br>
                    <form action="registration.php" method="post" name = "register" >
                        <div style="width:50%; margin:auto;">
                        <table>
                            <tr>
                                <td>
                                    <p>Please fill in this form to create an account.</p>
                                    <hr>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                <?php
                                    if (isset($_GET['error'])) {
                                    	echo 'Missing fields, marked as * below:';
                                    }
                                ?>
                                </td>
                            </tr>
                            <br>

                            <tr>
                                <td>
                                    <label for="username"><b>Username:</b></label>
                                    <input id="username" type="text" placeholder="Username" name="username" maxlength = 20>
                                </td>

                                <td>
                                    <?php
                                        if (isset($_GET['error'])){
                                            if(($_GET['username'] == '')) {
                                                echo '<p style="padding-top: 22px; padding-left:10px; color:red;">*</p>';
                                            }
                                        }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label style="width:50%" for="fname"><b>First Name:</b></label>
                                    <input type="text" placeholder="Enter First Name" name="fname"  class="name" id="name" maxlength = 20>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="lname"><b>Last Name:</b></label>
                                    <input type="text" placeholder="Ender Last Name" name="lname"  class="name" id="name" maxlength = 20><br><br>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="dob"><b>Date of Birth</b></label>
                                    <input type="date" placeholder="" name="dob"> <br><br>
                                </td>

                                <td>
                                    <?php
                                        if (isset($_GET['error'])== 'emptyfields') {
                                            if (($_GET['dob'] == NULL)){
                                            echo '<p style="padding-bottom: 22px; padding-left:10px; color:red;">*</p>';
                                            }else{
                                                // something goes here?
                                            }
                                        }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="email"><b>Email</b></label>
                                    <input type="text" placeholder="Enter Email" name="email" id="email" maxlength = 40>
                                </td>

                                <td>

                                <?php
                                    if (isset($_GET['error'])){
                                        if (($_GET['email'] == NULL)){
                                        echo '<p style="padding-top: 22px; padding-left:10px; color:red;">*</p>';
                                        }
                                    }
                                ?>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="pw"><b>Password</b></label>
                                    <input type="password" placeholder="Enter Password" name="pw" id="password" maxlength = 20>
                                </td>

                                <td>

                                <?php
                                    if (isset($_GET['error'])){
                                        if (($_GET['pw'] == 0)){
                                        echo '<p style="padding-top: 22px; padding-left:10px; color:red;">*</p>';
                                        }
                                    }
                                ?>

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="confpw"><b>Confirm Password</b></label>
                                    <input type="password" placeholder="Repeat Password" name="confpw" id="password" maxlength = 20>
                                </td>

                                <td>
                                <?php
                                    if (isset($_GET['error'])){
                                        if (($_GET['confpw'] == 0)){
                                        echo '<p style="padding-top: 22px; padding-left:10px; color:red;">*</p>';
                                        }
                                    }
                                ?>
                                </td>
                            </tr>
                        </table>
                        <button onclick="" name="register" type="submit" class="register">Register</button>

                        <p>Already have an account? <a href="index.php">Sign in</a>.</p>
                        <p>By creating an account you agree to our <a href="privacy.php">Terms & Privacy</a>.</p>

                    </form>
                </div>
            </div>
        </div>
    </body>
    <?php
        require "footer.php";
    ?>
</html>
<script>
    //for validating username 
    $('input[name="username"]').keyup( function (e,i) {
        $(this).val($(this).val().replace(/[^0-9|A-Z|a-z]| /g, ''));
    });

    //for validating fname, lname and IGN
    $('.name').keyup(function (){
        $(this).val($(this).val().replace(/[^A-Z|a-z]/g, ''));
    });
    //Charcter Limits
    CharLimit('username', 20);
    CharLimit('name', 20);
    CharLimit('email', 40);
    CharLimit('password', 20);
</script>