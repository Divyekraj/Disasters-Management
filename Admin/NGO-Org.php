
<?php
include 'header.php';
?>

<h2>NGO and Organisations </h2>
<p><hr></p>
<ul class="nav nav-pills" id="tab">
    <li class="active"><a data-toggle="pill" href="#home" onclick="sub()"><h4>NGO</h4></a></li>
    <li><a data-toggle="pill" href="#menu1" onclick="sub()"><h4>Organisations</h4></a></li>
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
   
   
</div>


<?php
include 'footer.php';
?>