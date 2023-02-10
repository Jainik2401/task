<?php 
include('connect.php');
if(isset($_POST['resetPass'])){

    $uName=$_POST['uName'];
    $uEmail=$_POST['uEmail'];
    $uPassword=$_POST['uPassword'];
    
    $query = "UPDATE user SET uPassword='$uPassword' WHERE uName='$uName' AND uEmail='$uEmail'";
     
    $rows = mysqli_query($connect,$query);
    if($rows){
        echo "Record was updated successfully.";
        header('location:login.php'); 
    } 
}

?>