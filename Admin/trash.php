<?php
include 'connection.php';
include 'header.php';
  $q = "select *from training_event where status=1;";
    $result = mysqli_query($conn, $q);
?>
<h2>Deleted Records.</h2>
<p><hr></p>
<ul class="nav nav-pills" id="tab">
    <li class="active"><a data-toggle="pill" href="#home" onclick="sub()"><h4>NGO</h4></a></li>
    <li><a data-toggle="pill" href="#menu1" onclick="sub()"><h4>Organisation</h4></a></li>
    <li><a data-toggle="pill" href="#menu2" onclick="sub()"><h4>Training Event</h4></a></li>
   
</ul>

<div class="tab-content" style="font-size:22px;">
    <div id="home" class="tab-pane fade in active">
        <div class="disaster-frame" >
             
        </div>
    </div>
    <div id="menu1" class="tab-pane fade">
        <div class="disaster-frame">
           
        </div>
    </div>
    <div id="menu2" class="tab-pane fade">
        <div class="disaster-frame">
           <iframe src="trash1.php" width="100%" height="100%" frameborder="0" name="event"></iframe>
        </div>
    </div>
    
</div>




<?php include 'footer.php'; ?>