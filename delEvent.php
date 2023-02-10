<?php
include('include/conn.php');

// for the delete the records
if (isset($_REQUEST['eid']))
{
    $eid=$_REQUEST['eid'];
    $query="delete from events where eid='$eid'";
    mysqli_query($conn,$query);
    header("Location:index.php");
}
?>