<?php
//connection file link 
include('include/conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="assets/style.css">

</head>

<body>
    <div class="container ">
        <div class="">
            <div class="headers ">Event Management System </div>
            <!-- toggle model for insert and update record(same model use for both operation) -->
            <div class="models">
                <div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                        Add New Event
                    </button>
                </div>

                <!-- The Modal -->
                <form action="insertEvent.php" method="post">
                    <div class="modal" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title" id="addtitle">Add New Event</h4>
                                    <h4 class="modal-title" id="updatetitle" style="display: none;">update Event</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body" id="event_detail">
                                    <label for="">Artist Name</label>
                                    <input type="text" name="artist_name" id="artist_name" value="" /><br>
                                    <label for="">City Name</label>
                                    <input type="text" name="event_location" id="event_location" value="" />
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success" name="addEvent" id="addEvent"
                                        data-bs-dismiss="modal">Add</button>
                                    <input type="hidden" name="eid" id="eid">
                                    <button type="submit" class="btn btn-warning" name="updateEvent" id="updateEvent"
                                        style="display: none;" data-bs-dismiss="modal">Update</button>
                                    <button type="submit" class="btn btn-danger" name="closeEvent"
                                        data-bs-dismiss="modal">Close</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- table for show the record from database -->
            <div class="">
                <table id="etable">
                    <tr>
                        <th>Id</th>
                        <th>Artist Name</th>
                        <th>Location</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    // get the data from events table in database using select query
                    $query="SELECT * FROM `events` ORDER BY eid";
                    $res=mysqli_query($conn,$query);
                    $cnt=mysqli_num_rows($res);
                        if($cnt > 0){
                        $i=1;
                            while($ans=mysqli_fetch_array($res))
                            {
                            $eid=$ans['eid'];
                            $artist_name=$ans['artist_name'];
                            $event_location=$ans['event_location'];

                            echo "<tr>";
                                echo "<td>$eid</td>";
                                echo "<td>$artist_name</td>";
                                echo "<td>$event_location</td>";
                                echo "<td><a class='editbtn' id='' href=\"index.php?eid=$eid\">Update</a>  <a class='delbtn' id='' href=\"delEvent.php?eid=$eid\">Delete</a></td>";

                            echo "</tr>";
               
                            }
                        }
                    ?>
                </table>
            </div>
        </div>

    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
//jquery for the click on edit link in table 
//that time table particular data go to in model for updating 
//that time insert button,title hide and show the update button and title 
$(document).ready(function() {

    $('.editbtn').on('click', function(e) {
        e.preventDefault()
        $('#myModal').modal('show');
        $('#addEvent').hide();
        $('#updateEvent').show();
        $('#updatetitle').show();
        $('#addtitle').hide();
        $tr = $(this).closest('tr');

        var data = $tr.children(" td").map(function() {
            return $(this).text();
        }).get();
        console.log(data);
        $('#eid').val(data[0]);
        $('#artist_name').val(data[1]);
        $('#event_location').val(data[2]);
    });
});
</script>

<script type="text/javascript">
//jquery for click on delete link in table particular data
//that time ask confirmation to delete or not
$(function() {
    $('td a.delbtn').click(function() {
        return confirm("Are You sure that You want to delete this?");
    });
});
</script>

</html>