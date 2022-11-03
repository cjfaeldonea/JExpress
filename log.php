<?php include 'header.php'; ?>

<body style="background-image: url(img/car1.jpg); background-repeat: no-repeat;  min-height: 100vh ">
	<?php include 'navbar.php'; ?>
	<div class="container" style="vertical-align: middle">
		<div id="row text-center" >
			<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-2 col-lg-4 col-lg-offset-2 text-center" >
				<br>
				<form action="admin.php" method="post">
					<fieldset style="background-color: rgb(0,0,0,0.2)">
						<br><br>
						<h3 style="color: white; font-weight: bold">Login</h3><br>
						<input type="text" placeholder="Username" required="" name ='uname' style="padding: 5px 5px 5px 5px;"></p>
	            		<input type="password" placeholder="Password" required="" name='pword' style="padding: 5px 5px 5px 5px;"></p>
	            		<input type="hidden" name="key" value="01">
				        <input type="submit" value="Sign In" class="btn btn-hero btn-sm"></span>
				        <br><br><br><br><br>
				    </fieldset>
				        
				</form>
			</div>

      		<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 col-lg-4 text-center">
      			<br><br>
      			<img src="img/logo.png" style="max-width: 200px;">
      			<h1 style="color: white; font-family: 'theboldfont">Jerome <yellow>Express</yellow></h1>
      		</div>
      </div> <!-- end login -->
      
    </div>
</body>