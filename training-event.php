<?php
include 'header.php';
include 'Admin/connection.php';

if ($conn) {
    $q = "select *from training_event where status=0;";
    $result = mysqli_query($conn, $q);
    $num_row = mysqli_num_rows($result);
} else {
    echo "<script>alert(' Dataase is not connected !');window.location='login.php';</script>";
}
?>

<center><span style="color:red;font-family: 'Lexend Deca', sans-serif;"><h3><?php
            if ($num_row == 0) {
                echo "<br>There is no upcoming events ! ";
                echo "<script>document.getElementById('all').style.display='none';</script>";
            }
            ?></h3>
    </span>
</center>

<?php
while ($row = mysqli_fetch_assoc($result)) {
    ?>

    <div class="event" id="all">
        <img src="admin/poster/<?php echo $row['poster']; ?>" class="poster" >
        <div class="intro">
            <h3><span class="glyphicon glyphicon-hand-right">&nbsp;</span><?php echo $row['name']; ?></h3>
            <h6 style="display:inline;"><span class="glyphicon glyphicon-calendar">&nbsp;</span><?php echo $row['date']; ?> &nbsp; &nbsp; <span class="glyphicon glyphicon-map-marker">&nbsp;</span><?php echo $row['venue']; ?></h6>
            <h6><span class="glyphicon glyphicon-tags">&nbsp;</span> <?php echo $row['tags']; ?></h6>
        </div>
    </div>
    <?php
}
?>
<?php include 'footer.php'; ?>