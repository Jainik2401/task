<?php
session_start();
include('connect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>


<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial;
    padding: 10px;
    background: #f1f1f1;
}
</style>


<body>

    <div class="header">
        <img src="logo-removebg-preview.png" alt="logo">
    </div>

    <div class="topnav">
        <a href="index.php">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
        <?php if( isset($_SESSION['uName']) && !empty($_SESSION['uName']) )
        {
        ?>
        <a href="logout.php" style="float:right">Logout</a>
        <?php }
        else{ ?>
        <a href="login.php" style="float:right">Login</a>
        <?php } ?>
    </div>

    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <?php  
                 if(!isset($_SESSION['uName'])){
                    echo '<h4>Welcome Guest.</h4>';
                    }
                    else
                    {
                    echo '<h4>Welcome ' . $_SESSION['uName'] . '</h4>';
                    }
                ?>


            </div>
        </div>
        <div class="leftcolumn">
            <div class="card">
                <?php  
                 if(!isset($_SESSION['uName'])){
                    echo '<h4>Welcome Guest.</h4>';
                    }
                    else
                    {
                    echo '<h4>Welcome ' . $_SESSION['uName'] . '</h4>';
                    }
                ?>


            </div>
        </div>
    </div>
    <footer class=" footer text-center text-lg-start border border-white mt-xl-5 pt-4">
        <div class="text-center p-3 ">
            <span> © 2001 Copyright: Jainik Kaneriya</span>
        </div>
    </footer>


</body>

</html>