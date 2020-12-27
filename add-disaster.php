<center><img src="images/loading.gif"></center>
<?php 
    include 'admin/connection.php';
   if($conn){
       echo "connected";
   }
            $name=$_POST['name'];
        $desc=$_POST['desc'];
        $location=$_POST['location'];
        $date=$_POST['date'];
        $title=$_POST['title'];
        $img=$_FILES['img1']['name']; $timg=$_FILES['img1']['tmp_name'];
         $img2=$_FILES['img2']['name'];$timg2=$_FILES['img2']['tmp_name'];
        $img3=$_FILES['img3']['name'];$timg3=$_FILES['img3']['tmp_name'];
       if (move_uploaded_file($timg, "./uploaded/" . $img) && move_uploaded_file($timg2, "./uploaded/" . $img2) && move_uploaded_file($timg3, "./uploaded/" . $img3))
       {
           $q="insert into disaster values ('','$name','$location','$desc','$date','$title','$img','$img2','$img3','0');";
           $result=mysqli_query($conn,$q);
           if($result){
               echo "<script>alert('Thank you ! After admin approval your information will be show at \"Recent update\". ');window.location='disasters.php';</script>";
           }
           else
               echo "<script>alert('Error: unable to insert record ".mysqli_error($conn)." ');</script>";
           
               
       } 
        else
            echo "<script>alert('not moved');</script>";
    
?>
