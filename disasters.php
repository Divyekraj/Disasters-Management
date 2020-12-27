<?php include 'header.php';
?>
<?php
include 'admin/connection.php';
$q = "select *from disaster where status=1;";
$result = mysqli_query($conn, $q);
?>
<div class="side-nav" style="margin-top:10px;">
    <h3 style="border-bottom:1px solid black;margin-left:30px;">Updated</h3>
    <div class="links">
        <ul>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <a href="disaster_info.php?id=<?php echo $row['did'];?>"><li><?php echo $row['title']; ?></li></a>
            <?php
        }
        ?>
        </ul>
    </div>
    
    <h3 style="border-bottom:1px solid black;margin-left:30px;">Years</h3>
    <a href="#"  onclick="$('.discription').load('information/amravati/v.html')">2019</a><br>
    <a href="#"  onclick="$('.discription').load('information/amravati/v.html')">2018</a><br>
    <a href="#"  onclick="$('.discription').load('information/amravati/v.html')">2017</a><br>
    <a href="#"  onclick="$('.discription').load('information/amravati/v.html')">2016</a><br>
    <a href="#"  onclick="$('.discription').load('information/amravati/v.html')">2015</a><br>
    <a href="#"  onclick="$('.discription').load('information/amravati/v.html')">2014</a><br>
    <a href="#"  onclick="$('.discription').load('information/amravati/v.html')">2013</a><br>
    <a href="#"  onclick="$('.discription').load('information/2011/List.html')">2012</a><br>
    <a href="information/2011/list.html" target="frame">2011</a><br>

</div>
<a href="add-disaster-info.php"><h4 style="float:right;display:inline;margin-top:20px;">Have You face any disaster ?</h4></a>
<iframe name="frame"  frameborder="0"height="500px" style="float:right;width:940px;border-left:1px solid black;margin-top:-400px;"></iframe>
<?php
include 'footer.php';
?>