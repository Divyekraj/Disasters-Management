
<?php
include 'connection.php';
    $id=$_REQUEST['id'];
    $q="update training_event set status=0 where event_id='$id';";
    $result= mysqli_query($conn,$q);
    if($result)
        echo "<script>alert('Record is restore Successfully !');window.location='trash1.php';</script>";
    else
        echo "<script>alert('ERROR: Unable to Restore .');window.location='trash1.php';</script>";
?>