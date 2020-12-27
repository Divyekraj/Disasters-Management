<html>
    <head>
        <title>Platfrom for learning from disasters.</title>
        <script src="../Assets/JavaScript/admin.js"></script>
        <link href="../Assets/CSS/Login_css.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>   
   
    </head>
    <body >
        <center>
            <div id="login_box">
               <div id="logo"> <img src="../images/admin.jpg" width="50px" height="50px"></div>
                <div id="wrapper">
                    
                    <form action="admin_login_check1.php"method="post">
                        
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="email" type="text" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" required name="password" placeholder="Password">
                        </div>
                        <br><input type="submit" value="Submit" id="submit_button" >
                        
                        <br><br><a href="#" ><b>Back to site </b></a>
                        <br><a href="#" onclick="admin_request()"><b>Request for Admin </b></a>
                    </form>
                </div>
            </div>
        </center>
    </body>
</html>