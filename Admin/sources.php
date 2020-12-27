<?php
include 'header.php';
include 'connection.php';
if($conn){
    $q="select *from source where Theme='News';";
    $q2="select *from source where Theme='weather';";
    $result=mysqli_query($conn,$q);
    $result2=mysqli_query($conn,$q2);
        $row2=mysqli_fetch_assoc($result2);
        $row=mysqli_fetch_assoc($result);
    
}else
    echo "<script>alert('not Connected to DB');</script>";
?> 

<h2>Sources Of System</h2>
<p><hr></p>
<ul class="nav nav-pills" id="tab">
    <li class="active"><a data-toggle="pill" href="#home" onclick="sub()"><h4>News</h4></a></li>
    <li><a data-toggle="pill" href="#menu1" onclick="sub()"><h4>Weather</h4></a></li>
    <li><a data-toggle="pill" href="#menu2" onclick="sub()"><h4>Map/Statistics</h4></a></li>
   
</ul>

<div class="tab-content" style="font-size:22px;">
    <div id="home" class="tab-pane fade in active">
        <div class="disaster-frame" >
             <h2>Name :&nbsp;<?php echo $row['Name'];?></h2>
            Current News Source : <h3 style="display:inline;"><?php echo $row['Value'];?></h3> &nbsp;<button class="btn btn-primary active">Change</button>
        </div>
    </div>
    <div id="menu1" class="tab-pane fade">
        <div class="disaster-frame">
            <h2>Name :&nbsp;<?php echo $row2['Name'];?></h2>
            Current Weather Source :<h3 style="display:inline;"><?php echo $row2['Value'];?></h3> &nbsp;<button class="btn btn-primary active">Change</button>
        </div>
    </div>
    <div id="menu2" class="tab-pane fade">
        <div class="disaster-frame">
            Current Map and Statistics Source :<h2></h2>
        </div>
    </div>
    <div id="menu3" class="tab-pane fade">
        <div class="disaster-frame">
            
        </div>
    </div>
</div>


<?php
include 'footer.php';
?>