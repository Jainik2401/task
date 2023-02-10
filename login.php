<?php 
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <div class="row">
        <div class="col-6 vectorimg">
            <img src="vector.jpg" alt="vector" class="vector">
        </div>
        <div class="col-6 login_Form">
            <form action="dd.php" class="loginform" method="post">
                <div class="imgcontainer">
                    <img src="login.jpg" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                    <hr>
                    <h3>Sign In</h3>
                    <hr>
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uName" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="uPassword" required>

                    <button type="submit" name="signin">Login</button>
                    <!-- <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label> -->
                </div>

                <div class="jk" style="background-color:#f1f1f1">
                    <span><a href="registration.php" class="acc">Creat New Account?</a></span>
                    <span><a href="forgetpwd.php" class="psw">Forgot password?</a></span>
                </div>
            </form>
        </div>
    </div>
</body>

</html>