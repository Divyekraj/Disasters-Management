<?php 
    include 'header.php';
    include 'admin/connection.php';
?>
<?php 
    $id=$_REQUEST['id'];
    $q="select *from disaster where did=$id";
    $result=mysqli_query($conn,$q);
    if($result){
        
    }else
    {
        echo "<center><h1>No record Found</h1></center>";
    }
    $row=mysqli_fetch_assoc($result)
        
?>
<br>
<div class="info">
      Date:&nbsp;<?php echo $row['date'];?>
      <span style='float:right;font-size:30px;'><?php echo $row['title'];?></span>
    <br>
    <br>
    <center>
        <button onclick='document.getElementById("img").style.display="inline-block";'><img src="uploaded/<?php echo $row['img1'];?>" class="image" ></button>
    <button onclick='document.getElementById("img2").style.display="inline-block";'><img src="uploaded/<?php echo $row['img2'];?>" class="image" ></button>
   <button onclick='document.getElementById("img3").style.display="inline-block";'><img src="uploaded/<?php echo $row['img3'];?>" class="image" ></button>
   
   <div class="alert alert-dark" id="img" style="display:none;">
       <button type="button" class="close" data-dismiss="alert">&times;</button><br>
       <img src="uploaded/<?php echo $row['img1'];?>" width='480px' height="460px">
  </div>
    <div class="alert alert-dark" id="img2" style="display:none;">
       <button type="button" class="close" data-dismiss="alert">&times;</button><br>
       <img src="uploaded/<?php echo $row['img2'];?>" width='480px' height="460px">
  </div>
    <div class="alert alert-dark" id="img3" style="display:none;">
       <button type="button" class="close" data-dismiss="alert">&times;</button><br>
       <img src="uploaded/<?php echo $row['img3'];?>" width='480px' height="460px">
    </div></center><br>
        <?PHP echo $row['description'];?><br><br>
    <span style='float:right;font-size:28px;margin-right:20px;'>Informed By <br><?php echo $row['username'];?>&nbsp; , <?php echo $row['location']; ?></span>
</div>
<br>
<?php 
    
    include 'footer.php';
?>