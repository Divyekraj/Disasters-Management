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
            body{
                background-color:rgb(255,250,240);
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
        </style>
        <script>
            function DatePicker(){
            var date = new Date();
            date.setDate(date.getDate());

            $('#date').datepicker({ 
           startDate: date
            });
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
            function file() {
                var x = document.getElementById('file').value
                alert(x);
            }
        </script>
    </head>
    <body>
    <center>
        <h3><u>Add Training Event</u></h3>
        <form action="add_training_event1.php" method="post" enctype="multipart/form-data">
            <table class="table table-sm">

                <tr>
                    <th class="col-sm-3"><span style="color:red">&#42;</span>Event Name :</th>
                    <td class="col-sm-3"> <input type="text" placeholder="Enter the Event Name" name="name" autofocus required></td>
                </tr>
                <tr>
                    <th class="col-sm-3"><span style="color:red">&#42;</span> Venue :</th>
                    <td class="col-sm-3"> <input type="text" placeholder="Enter the venue" name="venue" required></td>
                </tr>
                <tr>
                    <th class="col-sm-3"> <span style="color:red">&#42;</span>Date :</th>
                    <td class="col-sm-3">  <input type="date" name="date" required data-provide="datepicker" id="date" onfocus="DatePicker()"></td>
                </tr>
                <tr>
                    <th class="col-sm-3"><span style="color:red">&#42;</span>Description :</th>
                    <td class="col-sm-3 row-sm-4"> <textarea required placeholder="Something about event?" name="discription"></textarea></td>
                </tr>
                <tr>
                    <th class="col-sm-3"><span style="color:red">&#42;</span>Organized by :</th>
                    <td class="col-sm-3"> <input type="text" name="organized" placeholder="organized by" required></td>
                </tr>
                <tr>
                    <th class="col-sm-3"><span style="color:red">&#42;</span>Poster :</th>
                    <td class="col-sm-3"><input type="FILE" name="poster" /></td>
                </tr>
                <tr>
                    <th class="col-sm-3">Special Guest :</th>
                    <td class="col-sm-3"> <input type="text" name="guest" placeholder="Enter the Guest Name"></td>
                </tr>
                <tr>
                    <th class="col-sm-3">Tags :</th>
                    <td class="col-sm-3">  <input type="text" name="tags" placeholder="Any Tag ?"></td>
                </tr>
                <tr>
                    <th class="col-sm-3">Ticket :</th>
                    <td class="col-sm-3"> <input type="checkbox" onload="checkbox()" onclick="checkbox()"id="check" style="width:20px;height:20px;margin-top:9px;"><span id="inf" style="display:none;transition:width 3s;"><h5 style="display:inline;">0-1000 :</h5><h5 id="tik" style="display:inline;">  </h5> &#x20b9; <input type="range" name="ticket" min="0" max="1000" onchange="change()" id="range" value="0"></span></td>
                </tr>

            </table>
            <table><thead style="border:2px solid black;"><hr><h3><input type="submit"></h3></thead><hr></table>
        </form>
    </center>
</body>
</html>