<link href="navbar.css" rel="stylesheet">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <a class="navbar-left" href="#"><img class ="logo" src="img/logo.png" ></a>
      <a class="navbar-brand hidden-xs visible-sm visible-md visible-lg" href="#"><b>J<yellow>Express</yellow></b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <form action = "admin.php" method="post">
              <input type='text' style='display:none;' name ="uname" value ="00">
              <input type='text' style='display:none;' name ="pword" value ="00">
              <input type='text' style='display:none;' name ="key" value ="00">
              <button class='admin-btn'type='submit'>Admin</button>
        <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
      </form>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>