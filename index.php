<?php 
    include 'header.php';
?>

            <div id="ban" style="display:inline;">
               
                <div>
                    <h3 style="margin-top:20px; border:3px groove red;width:300px;padding:5px;background-color:black;color:white;">News Report</h3>
                    
                    <iframe class="embed-responsive-item" style="background-color: #ffffff;display:inline;border:3px groove red;" src="https://momentaryreview.com/widget/" name="momentary_review" width=300" height="710" frameborder="0" marginwidth="2" marginheight="4" ></iframe>
                    <img class="mySlides" src="Images/d1.jpg"  width="600px">  

                    <img class="mySlides" src="Images/d2.jpg"  width="600px">  
                    <img class="mySlides" src="Images/d3.jpg"  width="600px">  
                    <img class="mySlides" src="Images/d4.jpg" width="600px">  
                    <img class="mySlides" src="Images/d5.jpg"  width="600px">
                    <img class="mySlides" src="Images/d6.jpg"  width="600px">
                     <img class="mySlides" src="Images/d7.jpg"  width="600px">
                      <img class="mySlides" src="Images/d8.jpg"  width="600px">
                    <div class="section">
                        <img src="Images/di.png" width="730px" height="330px">
                    </div>

                </div>
               
            </div>
          
            <br><br><br>
        
 </div>
</header>
        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {
                    myIndex = 1
                }
                x[myIndex - 1].style.display = "inline";
                setTimeout(carousel, 3000); // Change image every 2 seconds
            }
        </script>
<?php 
    include 'footer.php';
?>