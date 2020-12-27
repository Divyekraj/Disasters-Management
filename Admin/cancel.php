

<?php
include 'connection.php';
    $id=$_REQUEST['id'];
    $q="delete from disaster where did='$id';";
    $result= mysqli_query($conn,$q);
    if($result)
        echo "<script>alert('Approve Cancel !');window.location='request1.php';</script>";
    else
        echo "<script>alert('ERROR: Unable to Cancel .');window.location='request1.php';</script>";
?>