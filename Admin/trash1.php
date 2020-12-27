<html>
    <body>
</html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<?php 
include 'connection.php';
  $q = "select *from training_event where status=1;";
    $result = mysqli_query($conn, $q);
    ?>
<table class="table table-hover" border="1" width="100%" >
    <thead class="thead-dark">
        <tr>
            <th>Poster</th>
            <th>ID</th>
            <th>Name</th>
            <th>Venue</th>
            <th>Date</th>
            <th>Discription</th>
            <th>By</th>
            <th>Guest</th>
            <th>Tags</th>
            <th>Ticket</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><center><img src="poster/<?php echo $row['poster']; ?>" width="70px" height="70px" id="poster"></center></td>

                <td><?php echo $row['event_id']; ?></td>

                <td><?php echo $row['name']; ?></td>

                <td><?php echo $row['venue']; ?></td>

                <td><?php echo $row['date']; ?></td>

                <td><?php echo $row['discription']; ?></td>

                <td><?php echo $row['organized_by']; ?></td>

                <td><?php echo $row['guest']; ?></td>

                <td><?php echo $row['tags']; ?></td>
                <td><?php echo $row['ticket']; ?></td>
                <td><button class="btn btn-success" onclick="window.location='restore.php?id=<?php echo $row['event_id']; ?>'">Restore</button>
                    <button class="btn btn-danger" onclick="window.location='delete_per.php?id=<?php echo $row['event_id']; ?>'" style="margin-left:5px;margin-top:5px;">Delete</button></td>;
            </tr>
        <?php } ?>           
    </tbody>
</table>
</body>
</html>
