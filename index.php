<?php include('header.php'); ?>
<body>
<?php include('navbar.php'); ?>

<link href="carousel.css" rel="stylesheet">
		
<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->

  <!-- Indicators -->
  <ol id="effect" class="carousel-indicators">
    <li id="RestuMenu" data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
  		<div class="overlay"></div>
  			<div class="overlay"></div>
		      <div class="hero">
		        <hgroup>
		            <h1>Jerome <yellow>Express</yellow></h1>        
		            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		            tempor incididunt ut labore et dolore magna aliqua. </h3>
		        </hgroup>
		        <a href="order.php"><button class="btn btn-hero btn-lg" role="button">Order Now</button></a>
		      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
  		<div class="overlay"></div>
	      <div class="hero">        
	        <hgroup>
		            <h1>Jerome <yellow>Express</yellow></h1>               
		            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		            tempor incididunt ut labore et dolore magna aliqua. </h3>
	        </hgroup>       
		        <a href="order.php"><button class="btn btn-hero btn-lg" role="button">Order Now</button></a>
	        
	      </div>
	    </div>
    <div class="item slides">
      <div class="slide-3"></div>
  		<div class="overlay"></div>

      <div class="hero">        
        <hgroup>
		            <h1>Jerome <yellow>Express</yellow></h1>        
		            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		            tempor incididunt ut labore et dolore magna aliqua. </h3>
        </hgroup>
		        <a href="order.php"><button class="btn btn-hero btn-lg" role="button">Order Now</button></a>
        
      </div>
    </div>
  </div> 
</div>

<div  class="container cont-in">
	<h1  class="page-header text-center"><br>MENU</h1>
	<ul class="nav nav-tabs nav-justified">
		<?php
			$sql="select * from category order by categoryid asc limit 1";
			$fquery=$conn->query($sql);
			$frow=$fquery->fetch_array();
			?>
				<li class="active"><a data-toggle="tab" href="#<?php echo $frow['catname'] ?>"><?php echo $frow['catname'] ?></a></li>
			<?php

			$sql="select * from category order by categoryid asc";
			$nquery=$conn->query($sql);
			$num=$nquery->num_rows-1;

			$sql="select * from category order by categoryid asc limit 1, $num";
			$query=$conn->query($sql);
			while($row=$query->fetch_array()){
				?>
				<li><a data-toggle="tab" href="#<?php echo $row['catname'] ?>"><?php echo $row['catname'] ?></a></li>
				<?php
			}
		?>
	</ul>
	<div class="tab-content">
		<?php
			$sql="select * from category order by categoryid asc limit 1";
			$fquery=$conn->query($sql);
			$ftrow=$fquery->fetch_array();
			?>
				<div id="<?php echo $ftrow['catname']; ?>" class="tab-pane fade in active" style="margin-top:20px;">
					<?php

						$sql="select * from product where categoryid='".$ftrow['categoryid']."'";
						$pfquery=$conn->query($sql);
						$inc=4;
						while($pfrow=$pfquery->fetch_array()){
							$inc = ($inc == 4) ? 1 : $inc+1; 
							if($inc == 1) echo "<div class='row'>"; 
							?>
								<div class="col-xs-12 col-sm-6  col-md-4  col-lg-3 ">
									<div class="panel panel-default">
										<div class="panel-body text-center">
											<img class="cropped2" src="<?php if(empty($pfrow['photo'])){echo "upload/noimage.jpg";} else{echo $pfrow['photo'];} ?>">
										</div>
										<div class="panel-heading text-center">
											<b><?php echo $pfrow['productname']; ?></b>
										</div>
										<div class="panel-footer text-center">
											<form method='POST' action='order.php'>
												<input type="text" style="display:none;" name ="prodNum" value ="<?php echo $pfrow['productid'] ?>">
												&#8369;<?php echo number_format($pfrow['price'], 2); ?>
												<button type='submit' class='btn btn-hero btn-sm'>Buy</button></a>
											</form>
										</div>
									</div>
								</div>
							<?php
							if($inc == 4) echo "</div>";
						}
						if($inc == 1) echo "<div class='col-md-3'></div><div class='col-md-3'></div><div class='col-md-3'></div></div>"; 
						if($inc == 2) echo "<div class='col-md-3'></div><div class='col-md-3'></div></div>"; 
						if($inc == 3) echo "<div class='col-md-3'></div></div>"; 
					?>
		    	</div>
			<?php

			$sql="select * from category order by categoryid asc";
			$tquery=$conn->query($sql);
			$tnum=$tquery->num_rows-1;

			$sql="select * from category order by categoryid asc limit 1, $tnum";
			$cquery=$conn->query($sql);
			while($trow=$cquery->fetch_array()){
				?>
				<div id="<?php echo $trow['catname']; ?>" class="tab-pane fade" style="margin-top:20px;">
					<?php

						$sql="select * from product where categoryid='".$trow['categoryid']."'";
						$pquery=$conn->query($sql);
						$inc=4;
						while($prow=$pquery->fetch_array()){
							$inc = ($inc == 4) ? 1 : $inc+1; 
							if($inc == 1) echo "<div class='row'>"; 
							?>
								<div class="col-xs-12 center-blockcol-sm-6 text-center col-md-4 text-center col-lg-3">
									<div class="panel panel-default">
										<div class="panel-body">
											<img class="cropped2" src="<?php if($prow['photo']==''){echo "upload/noimage.jpg";} else{echo $prow['photo'];} ?>" >
										</div>
										<div class="panel-heading text-center">
											<b><?php echo $prow['productname']; ?></b>
										</div>
										<div class="panel-footer text-center">
											 <form method='POST' action='order.php'>
												<input type="text" style="display:none;" name ="prodNum" value ="<?php echo $prow['productid'] ?>">
												&#8369;<?php echo number_format($prow['price'], 2); ?>
												<button type='submit' class='btn btn-hero btn-sm'>Buy</button></a>
											</form>;
											
										</div>
									</div>
								</div>
							<?php
							if($inc == 4) echo "</div>";
						}
						if($inc == 1) echo "<div class='col-md-3'></div><div class='col-md-3'></div><div class='col-md-3'></div></div>"; 
						if($inc == 2) echo "<div class='col-md-3'></div><div class='col-md-3'></div></div>"; 
						if($inc == 3) echo "<div class='col-md-3'></div></div>"; 
					?>
		    	</div>
				<?php
			}
		?>
	</div>
	
</div>

<script src="nav_efx.js"></script>
</body>
<?php include 'footer.php' ?>
</html>