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
  $q = "select *from disaster where status=0;";
    $result = mysqli_query($conn, $q);
    ?>
<center>
<table class="table table-hover" border="1" width="100%" >
    <thead class="thead-dark">
        <tr>
            <th>Informant</th>
            <th>Location</th>
            <th>Description</th>
            <th>Date</th>
            <th>Title</th>
            <th>Image 1</th>
            <th>Image 2</th>
            <th>Image 3</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><h4><?php echo $row['username']?></h4></td>
                <td><?php echo $row['location']?></td>
                <td><?php echo $row['description']?></td>
                <td><?php echo $row['date']?></td>
                <td><?php echo $row['title']?></td>
                <td><img src="../uploaded/<?php echo $row['img1']?>" width="100px"height="100px"><br><a href="../uploaded/<?php echo $row['img1']?>" target="_blank"><button class="btn btn-info" style="width:100px;margin-top:-20;">Preview</button></a></td>
                <td><img src="../uploaded/<?php echo $row['img2']?>" width="100px"height="100px"><br><a href="../uploaded/<?php echo $row['img2']?>" target="_blank"><button class="btn btn-info" style="width:100px;margin-top:-20;">Preview</button></a></td>
                <td><img src="../uploaded/<?php echo $row['img3']?>" width="100px"height="100px"><br><a href="../uploaded/<?php echo $row['img3']?>" target="_blank"><button class="btn btn-info" style="width:100px;margin-top:-20;">Preview</button></a></td>
                <td><button class="btn btn-success" onclick="window.location='approve.php?id=<?php echo $row['did']; ?>'">Approve</button>
                    <button class="btn btn-danger" onclick="window.location='cancel.php?id=<?php echo $row['did']; ?>'" style="margin-left:5px;margin-top:5px;">Cancel</button></td>            </tr>
        <?php } ?>           
    </tbody>
</table>
</center>
</body>
</html>
