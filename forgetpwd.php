<?php include('connect.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>


<body>


    <div class=" reg_Form">
        <form action="fp.php" class="regform" method="post">
            <div class="imgcontainer">
                <img src="login.jpg" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <hr>
                <h3>Forget Password</h3>
                <hr>
                <label for="uname"><b>Enter Your Username</b></label>
                <input type="text" placeholder="Enter Your Username" name="uName" required>

                <label for="email"><b>Enter Your Email</b></label>
                <input type="text" placeholder="Enter Your Email" name="uEmail" required>

                <label for="psw"><b>Enter Your New Password</b></label>
                <input type="password" placeholder="Enter Your New Password" name="uPassword" required>

                <button type="submit" name="resetPass">Reset PassWord</button>

            </div>


        </form>
    </div>

</body>

</html>