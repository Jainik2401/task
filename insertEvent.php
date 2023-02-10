<?php 
include('include/conn.php');


// for the insert the records
if(isset($_POST['addEvent']))
{
    $artist_name=$_POST['artist_name'];
    $event_location=$_POST['event_location'];

    $query="insert into events(artist_name,event_location)values('$artist_name','$event_location')";
    $addEvent = mysqli_query($conn,$query);
    if($addEvent){
 
        header('location:index.php');
    }
    else{
 
        header("Location:index.php");
    }
    

}



// for the update the records
if (isset($_POST['updateEvent']))
{
    $artist_name = $_POST['artist_name'];
    $event_location = $_POST['event_location'];
    $eid = $_POST['eid'];
    
    $query = "update events set artist_name='$artist_name',event_location='$event_location' where eid=$eid";
//echo $query;
    $cnt = mysqli_query($conn,$query);
    if ($cnt > 0){
        header("Location:index.php");
    }
    else{
        header("Location:index.php");
    }
}



?>