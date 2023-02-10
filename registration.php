<?php include('connect.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>


<body>


    <div class=" reg_Form">
        <form action="actionPage.php" class="regform" method="post">
            <div class="imgcontainer">
                <img src="login.jpg" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <hr>
                <h3>Sign Up</h3>
                <hr>
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="uemail" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="upassword" required>

                <button type="submit" name="signup">Sign Up</button>
                <!-- <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label> -->
            </div>

            <div class="jk" style="background-color:#f1f1f1">
                <span><a href="login.php" class="acc">Already have an account?</a></span>

            </div>
        </form>
    </div>

</body>

</html>