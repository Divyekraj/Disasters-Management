<html>
    
    <center><img src="../Images/loading.gif" style="background-repeat:no-repeat;"></center>
    <body background="Images/patternhome.jpg">
       
      
            
</body>
</html>
<?php
$Email = $_POST['email'];
$Password = $_POST['password'];

$conn = mysqli_connect("localhost", "root", "", "platform_for_learning_from_disasters");
if ($conn) {
    $q = "select *from admin where Email='" . $Email . "' and Password='" . $Password . "';";
    $result = mysqli_query($conn, $q);
    $num_row = mysqli_num_rows($result);
    if ($num_row == 1) {
        session_start();
        $data = mysqli_fetch_array($result);
        $_SESSION['ID'] = $data['Email'];
        $fname = $data['Fname'];
        $lname = $data['Lname'];
        echo "<script>window.location='index.php'; </script>";
    } else
        echo "<script> alert('Invalid Email and password , please Enter valid Email and password.');window.location='login.php'; </script> ";
}
else {
    echo "<script>alert(' Dataase is not connected !')</script>";
}
?>
