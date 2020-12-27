<?php
session_start();
if (!isset($_SESSION['ID']))
    echo "<script>alert('Please login to continue');window.location='login.php';</script>";
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "platform_for_learning_from_disasters");
if ($conn) {
    $email = $_SESSION['ID'];
    $q = "select *from training_event where status=0;";

    $result = mysqli_query($conn, $q);
    $num_row = mysqli_num_rows($result);
} else {
    echo "<script>alert(' Dataase is not connected !');window.location='login.php';</script>";
}
?>
<html>
    <head>

        <title>Platform For Learning From Disasters </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="..//Assets/CSS/admin_css6.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap');
            @import url('https://fonts.googleapis.com/css?family=Livvic:600i&display=swap');
            body{
                background-color:lightgray;
                font-family: 'Lexend Deca', sans-serif;
            }

            input{
                width:300px;
                height:40px;
                border-radius:10px;
            }
            input:hover{
                border-top-color:green;
                border-bottom-color:yellow;
            }
            input[type="submit"]{
                background-color:green;
                color:white;
                border-radius:20px;
            }
            textarea{
                width:300px;
                height:40px;
                border-radius:10px;
            }
            textarea:hover{
                border-top-color:green;
                border-bottom-color:yellow;
            }
            tr{
                width:100%;
            }
            td{
                padding:10px;

            }
            td:hover{
                background-color:rgba(255,255,255,0.5);

            }
            #poster{
                border:1px solid black;
                border-radius:30px;
            }
            #op_button{
                float:right;
                margin-right:10px;
            }
            a.btn:hover {
                -webkit-transform: scale(1.1);
                -moz-transform: scale(1.1);
                -o-transform: scale(1.1);
            }
            a.btn {
                -webkit-transform: scale(0.8);
                -moz-transform: scale(0.8);
                -o-transform: scale(0.8);
                -webkit-transition-duration: 0.5s;
                -moz-transition-duration: 0.5s;
                -o-transition-duration: 0.5s;
            }
        </style>
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

        </script>
    </head>
    <body>
    <center>
        <h3 style="color:white;width:80%;height:10%;text-align:center;background-color:#0099CC;border-radius:30px;" id="all"><u>All Training Events</u></h3>
        <span style="color:red;font-family: 'Lexend Deca', sans-serif;"><h3><?php
                if ($num_row == 0) {
                    echo "There is no upcoming events ! ";
                    echo "<script>document.getElementById('all').style.display='none';</script>";
                }
                ?></h3></span>
        <table>

            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr style="border-radius:30px;border:1px solid black;">
                    <td>
                        <span>
                            <img src="poster/<?php echo $row['poster']; ?>" width="100px" height="200px" id="poster">
                        </span>
                    </td>
                    <td  id="row">

                        <h3 style="color:#333333;display:inline;font-family: 'Livvic', sans-serif;"><?php
                            echo $row['event_id'];
                            $id = $row['event_id'];
                            ?>.
                            <u><?php echo $row['name']; ?> </u> 
                            <?php
                            if (date("Y-m-d") > $row['date']) {
                                echo "<img src='../Images/expired.png' width='70px' height='30px' id='expired' style='margin-left:5px;'>";
                            }
                            ?>
                            <span id="op_button">
                                <a href="edit_event.php?id=<?php echo $row['event_id']; ?>" class="btn btn-primary a-btn-slide-text"  >
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    <span><strong>Edit</strong></span>            
                                </a>

                                <a href="delete.php?id=<?php echo $row['event_id']; ?>" class="btn btn-primary a-btn-slide-text">
                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                    <span><strong>Delete</strong></span>            
                                </a>
                            </span>
                        </h3>

                        <div style="margin-left:30px;color:brown;letter-spacing:1px;margin-top:5px;">
                            Description:<?php echo $row['discription']; ?><br><br>
                            Guest : <?php echo $row['guest']; ?>  <span style="margin-left:60px;">Ticket:<?php echo $row['ticket']; ?> &#x20b9;</span>
                            <br> Date:<?php echo $row['date']; ?> 
                            <span style="margin-left:30px;">venue:<?php echo $row['venue']; ?></span>
                            <span style="margin-left:30px;">Organized By :<?php echo $row['organized_by']; ?></span> <br>
                            Tags : <?php echo $row['tags']; ?> 
                        </div>

                    </td>
                </tr>


<?php } ?>
        </table>

    </center>
   
   
</body>
</html>