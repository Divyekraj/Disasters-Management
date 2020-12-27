
<?php

try {
    $conn = mysqli_connect("localhost", "root", "", "platform_for_learning_from_disasters");
    if ($conn) {
        $name = $_POST['name'];
        $venue = $_POST['venue'];
        $date = $_POST['date'];
        $discription = $_POST['discription'];
        $organized = $_POST['organized'];
        $guest = $_POST['guest'];
        $tags = $_POST['tags'];
        $ticket = $_POST['ticket'];
        $poster = $_FILES['poster']['name'];
        $temp = $_FILES['poster']['tmp_name'];


        if (move_uploaded_file($temp, "./poster/" . $poster)) {

            $query = "insert into training_event values(NULL,'$name','$venue','$date',' $discription','$organized','$guest','$tags','$ticket','$poster','0')";
            $res = mysqli_query($conn, $query);
            if ($res) {
                echo "<script>alert('Record added !');window.location='add_training_event.php';</script>";
            } else {
                echo "<script>alert('something wrong  !');window.location='add_training_event.php';</script>";
            }
        }
    }
} catch (Exception $e) {
    echo "<script>alert(" . $e->getMessage() . ")</script>";
}
?>