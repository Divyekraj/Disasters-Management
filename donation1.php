<?php 
    include 'header.php';
?>

    <style>
    body{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
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
	font-size: 48px;
}
.inputBox{
	position: relative;
	box-sizing: border-box;
	margin-bottom: 50px;
}
.inputBox .inputText{
	position: absolute;
    font-size: 24px;
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
    font-size: 24px;
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
                            <div class="row" style="border:2px solid #7ec3af"><marquee>
							<div class="col-sm-12">
                                                            <h5>It's not how much we give but how much love we put into giving.</h5>
							</div>
                                    </marquee>
						</div>
				<form action="add-donation.php" method="POST">
						

						<div class="row">
							<div class="col-sm-6">
								<div class="inputBox ">
									<div class="inputText">Name</div>
									<input type="text" name="name" class="input">
								</div>
							</div>

							
						</div>

						<div class="row">
							<div class="col-sm-6">
								<div class="inputBox">
									<div class="inputText">Email</div>
									<input type="text" name="mail" class="input">
								</div>
							</div>

							<div class="col-sm-6">
								<div class="inputBox">
									<div class="inputText">Mobile</div>
									<input type="text" name="mob" class="input">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<div class="inputBox">
									<div class="inputText">Address</div>
									<input type="text" name="add" class="input">
								</div>
							</div>
						</div>
                    <div class="row">
							<div class="col-sm-12">
								<div class="inputBox">
									<div class="inputText">Donation Type</div>
                                    <br>
                                    <br>
                                     <select name="donation" class="input" onchange="check()" id="d">
                                        <option value="cloth">Cloth</option>
                                        <option value="food">Food</option>
                                        <option value="cash">Money</option>
                                        <option value="medicine">Medicine</option>
                                         <option value="needs">Daily Needs</option>
                                    </select> 
									
								</div>
							</div>
						</div>
                                                   <div class="row" id="c" style="display:none;">
							<div class="col-sm-12">
								<div class="inputBox">
									<div class="inputText">Cash</div>
									<input type="text" name="cash" class="input">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<input type="submit" name="" class="button" value="Submit">
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
<?php 
    include 'footer.php';
?>
