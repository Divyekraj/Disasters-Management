<?php include 'header.php'; ?>

    
    <style>
    body{
	
}
.formBox{
	margin-top: 90px;
	padding: 50px;
}
.formBox  h1{
	margin: 0;
	padding: 0;
	text-align: center;
	margin-bottom: 50px;
	text-transform: uppercase;
	font-size: 30px;
}
.inputBox{
	position: relative;
	box-sizing: border-box;
	margin-bottom: 50px;
}
.inputBox .inputText{
	position: absolute;
    font-size: 19px;
    line-height: 50px;
    transition: .5s;
    opacity: .5;
}
.inputBox .input{
	position: relative;
	width: 100%;
	height: 50px;
	background: transparent;
	border: none;
    outline: none;
    font-size: 19px;
    border-bottom: 1px solid rgba(0,0,0,.5);

}
.focus .inputText{
	transform: translateY(-30px);
	font-size: 18px;
	opacity: 1;
	color: #00bcd4;

}
textarea{
	height: 100px !important;
}
.button{
	width: 100%;
    height: 50px;
    border: none;
    outline: none;
    background: #03A9F4;
    color: #fff;
}
.container-fluid
        {
            width: 600px;
            margin: auto;
        
        
        }
.formBox
        {
            border: 1px solid;
        }
    </style>

<div class="container-fluid">
  
			<div class="formBox">
                            <img src="Images/know.jpg" width="400px" height="80px" style="margin-left:30px;margin-top:-130px;">
				<form action="add-disaster.php" method="post" enctype="multipart/form-data">
						
						<div class="row">
							<div class="col-sm-6">
								<div class="inputBox ">
									<div class="inputText">Your name ?</div>
									<input type="text" name="name" class="input" required>
								</div>
							</div>

							
						</div>
                                    <div class="row">
							<div class="col-sm-6">
								<div class="inputBox ">
									<div class="inputText">Title </div>
									<input type="text" name="title" class="input" required>
								</div>
							</div>

							
						</div>
                                    <div class="row">
							<div class="col-sm-6">
								<div class="inputBox ">
									<div style="color:rgba(0,0,0,0.5);font-size:19px;">Date</div><br>
									<input type="date" name="date" class="input" required>
								</div>
							</div>

							
						</div>
                        <div class="row">
							<div class="col-sm-6">
								<div class="inputBox ">
									<div class="inputText">Location</div>
									<input type="text" name="location" class="input" required>
								</div>
							</div>

							
						</div>

						

						<div class="row">
							<div class="col-sm-12">
								<div class="inputBox">
									<div class="inputText">Describe us</div>
									
                                    <textarea class="input" name="desc" required></textarea>
                                    
								</div>
							</div>
						</div>
                    <div class="row">
							<div class="col-sm-12">
								<div class="inputBox">
                                                                    <div style="color:rgba(0,0,0,0.5);font-size:19px;">Upload Photographs</div><br>
									
                                    
                                    
                                    <input type="file" name="img1" accept="image/*" class="input" required>
                                    <input type="file" name="img2" accept="image/*" class="input" required>
                                    <input type="file" name="img3" accept="image/*" class="input"required>
								</div>
							</div>
						</div>
                    

						<div class="row">
							<div class="col-sm-12">
								<input type="submit" name="" class="button" value="Submit">&nbsp;
                                                                <input type="button" name="" class="button" value="Cancel">
							</div>
						</div>
				</form>
			</div>
		</div>
	
<br>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	 <script type="text/javascript">
	 	$(".input").focus(function() {
	 		$(this).parent().addClass("focus");
	 	})
	 </script>


<?php include 'footer.php'; ?>
