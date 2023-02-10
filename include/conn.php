<?php
//connection code to connect the database(event db)
$conn = mysqli_connect("localhost","root","","event");
//if connection was failed show if part
if(!$conn){
    echo 'connection failed...!!!!';
}
//else connection was sucessfully show else part
else{
    echo 'connection sucessfully...!!!';
}

?>