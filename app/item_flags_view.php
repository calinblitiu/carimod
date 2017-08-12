<?php 

  require_once 'header.php';
  $controller = new ControllerItem();
  $controllerFlag = new ControllerFlag();
  $controllerUser = new ControllerUser();

  

  if(!empty($_SERVER['QUERY_STRING'])) {

      $extras = new Extras();
      $item_id = $extras->decryptQuery1(KEY_SALT, $_SERVER['QUERY_STRING']);

      $reviews = $controllerFlag->getFlagsByItemId($item_id);
      $item = $controller->getItemByItemId($item_id);

      if($item_id == null) {
        echo "<script type='text/javascript'>location.href='403.php';</script>";
      }

      if(isset($_POST['submit'])) {
          $controller->flagItem($item_id, 0);
          echo "<script type='text/javascript'>location.href='items.php';</script>";
      }
  }



?>


<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://getbootstrap.com/assets/ico/favicon.ico">

    <title>Item Finder</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="bootstrap/css/navbar-fixed-top.css" rel="stylesheet">
    <link href="bootstrap/css/custom.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">


        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Item Finder</a>
        </div>


        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li ><a href="home.php">Home</a></li>
            <li ><a href="categories.php">Categories</a></li>
            <li class="active"><a href="items.php">Items</a></li>
            <li ><a href="news.php">News</a></li>
            <li ><a href="admin_access.php">Admin Access</a></li>
            <li ><a href="users.php">Users</a></li>
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
            <li ><a href="index.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
        
      </div>
    </div>

    <div class="container">

      <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading clearfix">
          <h4 class="panel-title pull-left" style="padding-top: 7px;"><?php echo $item->item_name."'s"; ?> Flag Report</h4>
          <div class="btn-group pull-right">
            <!-- <a href="car_insert.php" class="btn btn-default btn-sm">Add Car</a> -->
            <form method="POST" action="">
                  <a href="items.php" class="btn btn-default btn-sm"><span class='glyphicon glyphicon-arrow-left'></span></a>
                  <button type="submit" name="submit" class="btn btn-default btn-sm">Unflag Item</a>
            </form>
          </div>
        </div>

        <!-- Table -->
        <table class="table">
          <thead>
              <tr>
                  <th>#</th>
                  <th >Name</th>
                  <th width="50%">Review</th>
              </tr>

          </thead>
          <tbody>
              <?php 

                  if($reviews != null) {

                    $ind = 1;
                    foreach ($reviews as $review)  {
                      
                          $extras = new Extras();
                          $user = $controllerUser->getUserByUserId($review->user_id);

                          echo "<tr>";
                          echo "<td>$ind</td>";
                          echo "<td>$user->full_name</td>";
                          echo "<td>$review->review</td>";
                          
                          echo "</tr>";

                          ++$ind;
                    }
                  }

              ?>

          </tbody>
          
        </table>
      </div>


    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    
  

</body></html>