<?php include('header.php'); ?>
<link rel="stylesheet" href="order.css">

<body>
<?php include('navbar.php'); 
	?>

<div class="container" >
	<h1 class="page-header text-center">ORDER</h1>
	<div class="fixed-table-toolbar">
	</div>
	<form method="POST" action="purchase.php">
		<table class="table table-responsive" >
			<thead>
				<th class="text-center"><input type="checkbox" id="checkAll"></th>
				<th class="text-center">Product</th>
				<th class="text-center"></th>
				<th class="text-center hidden-xs">Quantity</th>
			</thead>
			<tbody>
				<?php 
					$sql="select * from product left join category on category.categoryid=product.categoryid order by product.categoryid asc, productname asc";
					$query=$conn->query($sql);
					$iterate=0;
					while($row=$query->fetch_array()){
						?>
						<tr>
							<td class="text-center"><input type="checkbox" value="<?php echo $row['productid']; ?>||<?php echo $iterate; ?>" name="productid[]" style=""
								<?php if (!empty($_POST)&&$_POST['prodNum'] === $row['productid']) {
									echo " checked";
								} ?>></td>
							<td class="hidden-xs text-center"><img class="cropped1 " src="<?php if(empty($row['photo'])){echo "upload/noimage.jpg";} else{echo $row['photo'];} ?>"></td>

							<td class="text-center"><img class="cropped1 hidden-sm hidden-md hidden-lg" src="<?php if(empty($row['photo'])){echo "upload/noimage.jpg";} else{echo $row['photo'];} ?>"><br><pname><?php echo $row['productname']; ?></pname><br><cat><?php echo $row['catname']; ?> </cat>
								<span class="hidden-sm hidden-md hidden-lg"><br>
									&#8369; <?php echo number_format($row['price'], 2); ?>   |  <b>Qty</b> <input class="qty " type="text" value="<?php 
									if (!empty($_POST)&&$_POST['prodNum'] === $row['productid']) {
										echo "1";
									}else{echo "0";};
								 ?>"  maxlength="3" class="qty " name="quantity_<?php echo $iterate; ?>" style="margin-left: 5px;"></span></td>
							
								<td class="hidden-xs text-center">&#8369; <?php echo number_format($row['price'], 2); ?><br>
									<input class="control-left" type="button" onclick="decrementValue('number- <?php echo$row['productid'] ?>')" value="-" />
									<input id="number- <?php echo$row['productid'] ?>" type="text" value="<?php 
									if (!empty($_POST)&&$_POST['prodNum'] === $row['productid']) {
										echo "1";
									}else{echo "0";};
								 ?>"  maxlength="3" class="qty " name="quantity_<?php echo $iterate; ?>">
									<input class="control-right " type="button" onclick="incrementValue('number- <?php echo$row['productid'] ?>')" value="+" /></td>
						</tr>
						<?php
						$iterate++;
					}
				?>
			</tbody>
		</table>
		
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-6 col-lg-4">
			
				<input type="text" name="customer" class="form-control" placeholder="Customer Name" required>
			</div>
			<div class="col-xs-3 col-sm-1 col-md-1 col-lg-1  text-center">
				<button type="submit" class="btn btn-primary" style="margin-left: 0px !important;"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
			</div>
			<div class="col-xs-3 col-sm-1 col-md-1 col-lg-1 text-center">				
				</form>
				<form action="index.php"><button class="btn  btn-primary" style="margin-left: 10px !important; margin-right: 10px !important" role="button" name="a" value="">Cancel</button></a></form>
			</div>
			<div class="col-xs-0 col-sm-1 col-md-2 col-lg-1 text-center"></div>
		</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#checkAll").click(function(){
	    	$('input:checkbox').not(this).prop('checked', this.checked);
		});
	});
</script>
<script type="text/javascript" src="inc_dec_but.js"></script>
</body>
<?php include 'footer.php' ?>

</html>