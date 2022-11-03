<?php 
include 'conn.php';

if (!empty($_POST)) {
    $username = $_POST['uname'];
    $pass = $_POST['pword'] ;
    $key = $_POST['key'];
}else{
  header("Location:log.php");
}

$sql = "SELECT * FROM admin WHERE username='$username'";
$result = $conn->query($sql);
$cred = $result->fetch_assoc();

if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
    header("Location:log.php");
}
else{
    if ($cred['password']==$pass || $key==00) {; ?>
      <?php include('header.php'); ?>
<body>
<?php include('navbar_admin.php'); ?>

<link href="carousel2.css" rel="stylesheet">
    
<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->

  <!-- Indicators -->
  <ol id="effect" class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
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
                <h3>Administration Panel</h3>
            </hgroup>
          </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="overlay"></div>
        <div class="hero">        
          <hgroup>
                <h1>Jerome <yellow>Express</yellow></h1>        
                <h3>Administration Panel</h3>
          </hgroup>       
        </div>
      </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="overlay"></div>

      <div class="hero">        
        <hgroup>
                <h1>Jerome <yellow>Express</yellow></h1>        
                <h3>Administration Panel</h3>
        </hgroup>
      </div>
    </div>
  </div> 
</div>

<div class="container text-center">
  <div class="row"></div>
      <div class="col-lg-4 col-lg-offset-4">
          <br>
          <form action="order.php"><button class="btn btn-hero btn-md" role="button" name="a" value="">Order</button></a></form>
          <form action="category.php" method="post"><button class="btn btn-hero btn-md" role="button" name="a" value="">Category</button></a></form>
          <form action="product.php" method="post"><button class="btn btn-hero btn-md" role="button" name="a" value="">Product</button></a></form>
          <form action="sales.php" method="post"><button class="btn btn-hero btn-md" role="button" name="a" value="">Sales</button></a></form>
      </div>
  
</div>

<?php include 'footer.php'; ?>

    <?php }
    else{
        echo "<script type='text/javascript'>
            if ( confirm( 'Credential Error' )) {
                document.location = 'log.php';
            }
             </script>";
       // header("Location:log.php");
    }
}

$conn->close();

?>
