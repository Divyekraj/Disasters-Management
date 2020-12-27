
<?php
include 'connection.php';
    $id=$_REQUEST['id'];
    $q="delete from training_event where event_id='$id';";
    $result= mysqli_query($conn,$q);
    if($result)
        echo "<script>alert('Record permanently Delete !');window.location='trash1.php';</script>";
    else
        echo "<script>alert('ERROR: Unable to delete Record .');window.location='trash1.php';</script>";
?>