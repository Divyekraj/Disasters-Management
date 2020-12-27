
<?php 
try{
   $conn=mysqli_connect("localhost","root","","platform_for_learning_from_disasters");
    
}
catch(Exception $e)
{
    echo "<script>alert(".$e->getMessage().")</script>";
}
?>

