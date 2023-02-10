<?php include('connect.php');


if(isset($_POST['signup']))
{
    $username=$_POST['uname'];
    $password=$_POST['upassword'];
    $email=$_POST['uemail'];

    $query="insert into user(uName,uPassword,uEmail)values('$username','$password','$email')";
    $addUser = mysqli_query($connect,$query);
    if($addUser){
        header('location:login.php');
    }
    else{
        echo 'failed';
    }
    

}



?>