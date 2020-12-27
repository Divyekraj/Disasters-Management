<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['ID']))
    echo "<script>alert('Please login to continue');window.location='login.php';</script>";
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "platform_for_learning_from_disasters");
if ($conn) {
    $email = $_SESSION['ID'];
    $q = "select *from admin where Email='" . $email . "';";

    $result = mysqli_query($conn, $q);
    $num_row = mysqli_num_rows($result);
    if ($num_row == 1) {
        $data = mysqli_fetch_array($result);
        $fname = $data['Fname'];
        $lname = $data['Lname'];

        $q1 = "select *from training_event";
        $result1 = mysqli_query($conn, $q1);
        $num_row1 = mysqli_num_rows($result1);
    }
} else {
    echo "<script>alert(' Dataase is not connected !');window.location='login.php';</script>";
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Platform For Learning From Disasters </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <script src="../Assets/JavaScript/admin.js"></script>
        <link rel="stylesheet" href="..//Assets/CSS/admin_css6.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
            function not()
            {

                var x = document.getElementById('not_cont').style.display;
                if (x == '') {
                    document.getElementById('not_cont').style.display = 'block';
                } else {
                    document.getElementById('not_cont').style.display = '';
                }
            }
            function request_check(){
               /* if(request){
                    alert("requested for admin");
                }
                else
                    alert("not requested ");*/
        var getData=window.localStorage.getItem("myInfo");
        var name=window.localStorage.getItem("name");
        alert(getData);
        alert(name);
        if(getData=="true"){
            confirm(name+"requested for admin");
        }
        else{
            window.localStorage.removeItem(getData);
            window.localStorage.removeItem(name);
        }
            }
        </script>
    </head>
    <body>
       
        <div class="header">
             
            <div class="side_nav">

                <div class="title">

                    <img src="../Images/admin.jpg" width="40px" height="40px" id="profile">
                    <span id="name_span"><?php echo "$fname $lname"; ?></span>
                </div>
                <ul style="margin-top:30px;">
                    <a href="index.php"><li class="menu">Dashboard</li></a>
                    <a href="sources.php"><li class="menu">Sources</li></a>
                    <a href="request.php"><li class="menu">Disaster Request</li></a>
                    <a href="support.php"><li class="menu">Support</li></a>
                    <a href="training_event.php"> <li class="menu">Training Events</li></a>
                    <a href="donations.php"> <li class="menu">Donations</li></a>
                    <a href="trash.php"> <li class="menu">Trash</li></a>
                    <a href="lock.php"> <li class="menu">Lock</li></a>

                </ul> 
            </div>


            <button id="visit" onclick="window.location = '../index.php';">Visit To Site </button>
            <div class="icon_div"> 
                    <button class="not_icon" onclick="not()" id='not_icon1'><img src="../Images/noti.png" width="30px" height="30px" alt="Notification"></button>
                    <button class="not_icon"><img src="../Images/mes.png"  width="30px" height="30px" alt="Message"></button>
                    <button class="not_icon" onclick="window.location = 'logout.php';"><img src="../Images/out.png" width="30px" height="30px" alt="Logout"></button>
                </div>
            <div class="container">

               
                    
          