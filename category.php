<?php if (empty($_POST)) {
		header("Location: warn.php");} ?>


<?php include('header.php'); ?>
<link rel="stylesheet" href="product.css">


<body>
<?php include('navbar_admin.php'); ?>
<div class="container" style="max-width: 75vh;">
	<h1 class="page-header text-center">CATEGORY CRUD</h1>
	<div class="bootstrap-table">
		<div class="fixed-table-toolbar">
			<a href="#addcategory" data-toggle="modal" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Category</a>
		</div>
	</div>
	<div>
		<table class="table table-striped table-bordered">
			<thead>
				<th class="text-center">Category Name</th>
				<th class="text-center">Action</th>
			</thead>
			<tbody>
				<?php
					$sql="select * from category order by categoryid asc";
					$query=$conn->query($sql);
					while($row=$query->fetch_array()){
						?>
						<tr>
							<td><?php echo $row['catname']; ?></td>
							<td class="text-center">
								<a href="#editcategory<?php echo $row['categoryid']; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil"></span> Edit</a> || <a href="#deletecategory<?php echo $row['categoryid']; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Delete</a>
								<?php include('category_modal.php'); ?>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</div>
<?php include('modal.php'); ?>
  </div>
<?php include 'footer.php' ?>
</body>
</html>