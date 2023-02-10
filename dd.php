<?php 
session_start();
include('connect.php');
if(isset($_POST['signin'])){

    $uName=$_POST['uName'];
    $uPassword=$_POST['uPassword'];

    $query = "select * from user where uPassword='$uPassword' AND uName='$uName'";
     
    $rows = mysqli_query($connect,$query);
    $row = mysqli_fetch_array($rows); 
    if (is_array($row)) {
        $_SESSION['uName'] = $row['uName'];
        $_SESSION['uPassword'] = $row['uPassword'];
        if(isset($_SESSION['uName'])){
            header('location:index.php'); 
        }
    } 
    else {
        header('location:login.php'); 
    }
}

?>