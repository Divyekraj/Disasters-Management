
<?php
include 'connection.php';
    $id=$_REQUEST['id'];
    $q="update disaster set status=1 where did='$id';";
  
    $result= mysqli_query($conn,$q);
    if($result)
        echo "<script>alert('Information Approve !');window.location='request1.php';</script>";
    else
        echo "<script>alert('ERROR: Unable to Approve .');window.location='request1.php';</script>";
?>