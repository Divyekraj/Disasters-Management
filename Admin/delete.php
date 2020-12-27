
<?php 
include 'connection.php';
    $ID=$_REQUEST['id'];
    $q="update training_event set status='1' where event_id='$ID';";
    $result= mysqli_query($conn,$q);
    if($result)
        echo "<script>alert('Record moved into Trash !');window.location='all_events.php';</script>";
    else
        echo "<script>alert('ERROR: Unable to delete Record .');window.location='all_events.php';</script>";
?>