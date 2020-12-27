<?php
include 'connection.php';
session_start();
$edit_id = $_REQUEST['id'];
try {
    if ($conn) {
        $q = "select *from training_event where event_id='$edit_id';";
        $result = mysqli_query($conn, $q);
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "<script>alert(' Dataase is not connected !');window.location='login.php';</script>";
    }
} catch (Exception $ex) {
    echo $ex->getMessage();
}
?>
<html>
    <head>

        <title>Platform For Learning From Disasters </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="..//Assets/CSS/admin_css6.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <link rel="stylesheet" href="../Assets/CSS/image-picker.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="../Assets/JavaScript/image-picker.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        <style>
            @import url('https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap');
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
            #file{
                
            }
            input[type=button]{
                background-color:brown;
                color:white;
            }
            input[type=button]:hover{
                background-color:white;
                color:black;
            }
        </style>
        <script>
            
   
           function callingfile(){
               document.getElementById('file').click();
           }
            function not()
            {

                var x = document.getElementById('not_cont').style.display;
                if (x == '') {
                    document.getElementById('not_cont').style.display = 'block';
                } else {
                    document.getElementById('not_cont').style.display = '';
                }
            }
            function checkbox() {

                var x = document.getElementById('check').checked;
                if (!(x == true)) {
                    document.getElementById('inf').style.display = 'none';
                    document.getElementById('range').value = 0;
                } else {
                    document.getElementById('inf').style.display = 'block';
                    document.getElementById('inf').style.transition = 'width 3s';

                }
            }
            
            function change() {
              
                var x = document.getElementById('range').value;
                document.getElementById('tik').innerHTML = x;
            }
           
          function disc(){
              document.getElementById('disc').value="<?php echo $row['discription']; ?>";
          }
        </script>
    </head>
    <body onload="disc()">
    <center>
        <h3 style="color:white;width:80%;height:10%;text-align:center;background-color:#0099CC;border-radius:30px;" id="all"><u>Edit Training Events</u></h3>
        
        <form action="update_event.php?id=<?php echo $edit_id?>" method="post" enctype="multipart/form-data" >
             <center>
                 
                 <img src="poster/<?php echo $row['poster']; ?>" id="poster" width="150px" height="180px" style="border:2px solid black;" ><br><br>
                     <input type="button" value="Change Poster" onclick="callingfile()" style="margin-top:-40px;width:150px;border:2px solid black;background-color:#0099CC;">
            <input type="file" value="poster/<?php echo $row['poster']; ?>"name="file" id="file" accept="image/*" style="display:none;">
            <script>
             function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#poster').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#file").change(function(){
        readURL(this);
    });
</script>
                 
        </center>
            <table class="table table-sm">

                <tr>
                    <th class="col-sm-3"><span style="color:red">&#42;</span>Event Name :</th>
                    <td class="col-sm-3"> <input type="text" placeholder="Enter the Event Name" name="name" value="<?php echo $row['name']; ?>" required></td>
                </tr>
                <tr>
                    <th class="col-sm-3"><span style="color:red">&#42;</span> Venue :</th>
                    <td class="col-sm-3"> <input type="text" placeholder="Enter the venue" name="venue" value="<?php echo $row['venue'];?>" required></td>
                </tr>
                <tr>
                    <th class="col-sm-3"> <span style="color:red">&#42;</span>Date :</th>
                    <td class="col-sm-3">  <input type="date" name="date" required value="<?php echo $row['date']; ?>"></td>
                </tr>
                <tr>
                    <th class="col-sm-3"><span style="color:red">&#42;</span>Discription :</th>
                    <td class="col-sm-3"> 
                        
                        <textarea height="30px"required placeholder="Something about event?" name="discription" id="disc" >
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <th class="col-sm-3"><span style="color:red">&#42;</span>Organized by :</th>
                    <td class="col-sm-3"> 
                        <input type="text" name="organized" placeholder="organized by" required value="<?php echo $row['organized_by'];?>">
                    </td>
                </tr>
                <tr>
                    <th class="col-sm-3">Special Guest :</th>
                    <td class="col-sm-3"> <input type="text" name="guest" placeholder="Enter the Guest Name" value="<?php echo $row['guest']; ?>"></td>
                </tr>
                <tr>
                    <th class="col-sm-3">Tags :</th>
                    <td class="col-sm-3">  <input type="text" name="tags" placeholder="Any Tag ?" value="<?php echo $row['tags']; ?>"></td>
                </tr>
                <tr>
                    <th class="col-sm-3">Ticket :</th>
                    <td class="col-sm-3"><span id="inf" style="display:inline;transition:width 3s;"><h5 style="display:inline;">0-1000 :</h5><h5 id="tik" style="display:inline;">  </h5> &#x20b9; <input type="range" name="ticket" min="0" max="1000" onchange="change()" id="range" value="<?php echo $row['ticket']; ?>" ></span></td>
                </tr>

            </table>
            <table><thead style="border:2px solid black;"><hr><h3><input type="submit"></h3></thead><hr></table>
        </form>
    </center>
</body>
</html>