<center><img src="images/loading.gif"></center>
<?php 
    include 'admin/connection.php';
   if($conn){
       $name=$_POST['name'];
       $mail=$_POST['mail'];
       $mob=$_POST['mob'];
       $add=$_POST['add'];
       $donation=$_POST['donation'];
       $cash=$_POST['cash'];
       if($donation=="cash"){
           $q="insert into donation values('','$name','$mail','$mob','$add','$donation','$cash');";
           $result=mysqli_query($conn,$q);
           if($result){
               echo "<script>alert('Donation Successfully !');window.location='donation1.php';</script>";
           }
           else
              echo "<script>alert('ERROR: unable to donate !');window.location='donation1.php';</script>";
       }
       else{
             $q="insert into donation values('','$name','$mail','$mob','$add','$donation','0');";
             $result=mysqli_query($conn,$q);
             if($result){
               echo "<script>alert('Donation Successfully !');window.location='donation1.php';</script>";
           }
           else
              echo "<script>alert('ERROR: unable to donate !');window.location='donation1.php';</script>";
               
       }
       
       }
   
   else
        echo "<script>alert('not connected');</script>";
    
?>

