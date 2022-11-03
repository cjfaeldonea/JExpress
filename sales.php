<?php if (empty($_POST)) {
		header("Location: warn.php");} ?>
<link rel="stylesheet" type="text/css" href="order.css">
<?php include('header.php'); ?>
<body>
<?php include('navbar_admin.php'); ?>
<div class="container" style="max-width: 70vw">
	<h1 class="page-header text-center">SALES</h1>
	<div class="fixed-table-toolbar">
	</div>
	<table class="table table-striped table-bordered">
		<thead>
			<th>Date</th>
			<th>Customer</th>
			<th>Total Sales</th>
			<th>Details</th>
		</thead>
		<tbody>
			<?php 
				$sql="select * from purchase order by purchaseid desc";
				$query=$conn->query($sql);
				while($row=$query->fetch_array()){
					?>
					<tr>
						<td class="text-left"><?php echo date('M d, Y h:i A', strtotime($row['date_purchase'])) ?></td>
						<td class="text-left"><?php echo $row['customer']; ?></td>
						<td class="text-center">&#8369; <?php echo number_format($row['total'], 2); ?></td>
						<td class="text-center"><a href="#details<?php echo $row['purchaseid']; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> View </a>
							<?php include('sales_modal.php'); ?>
						</td>
					</tr>
					<?php
				}
			?>
		</tbody>
	</table>
</div>
</body>
<?php include 'footer.php' ?>

</html>