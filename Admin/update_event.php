
<?php
include 'connection.php';
try{
    if ($conn) {
        $name = $_POST['name'];
        $venue = $_POST['venue'];
        $date = $_POST['date'];
        $discription = $_POST['discription'];
        $organized = $_POST['organized'];
        $guest = $_POST['guest'];
        $tags = $_POST['tags'];
        $ticket = $_POST['ticket'];
        $poster = $_FILES['file']['name'];
        $temp = $_FILES['file']['tmp_name'];
       $id=$_REQUEST['id'];
        if (move_uploaded_file($temp, "./poster/" . $poster))
            echo "<script>alert('moved');</script>";
        else
            echo "<script>alert('not moved');</script>";

        $query = "update training_event set name='$name',venue='$venue',date='$date',discription='$discription',organized_by='$organized',guest='$guest',tags='$tags',ticket='$ticket',poster='$poster' where event_id='$id';";
        $res = mysqli_query($conn, $query);
        if ($res) {
            echo "<script>alert('Record is updated Successfully !');</script>";
        } else {
            echo "<script>alert('something wrong  !');</script>";
        }
    }
} catch (Exception $e) {
    echo "<script>alert(" . $e->getMessage() . ")</script>";
}
 ?>