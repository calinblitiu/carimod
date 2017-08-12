<?php 

  require_once 'header.php';
  $controller = new ControllerCategory();

  $extras = new Extras();
  $category_id = $extras->decryptQuery1(KEY_SALT, $_SERVER['QUERY_STRING']);

  

  if($category_id != null) {
      
      $category = $controller->getCategoryByCategoryId($category_id);
      if( isset($_POST['submit']) ) {

        $itm = new Category();
        $itm->category_id = $category_id;
        $itm->category = trim(strip_tags($_POST['category']));
        $itm->created_at = time();
        $itm->updated_at = time();
        $itm->pid = $_POST['pid'];

        $controller->updateCategory($itm);
        echo "<script type='text/javascript'>location.href='categories.php';</script>";
    }
        
  }
  else {
        echo "<script type='text/javascript'>location.href='403.php';</script>";
  }

  
  $categories1 = $controller->getCategoriesResult();
  

  function toUL(array $array, $indent, $pid)
  {
      $html = '' . PHP_EOL;
      $indent++;
      foreach ($array as $value)
      {
          
          $selected = "";
          if($value['category_id'] == $pid)
            $selected = "selected";

          $html .= '<option value=' . $value['category_id']. ' '.$selected . '>' . str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;', $indent) . $value['category'];
          if (!empty($value['children']))
          {
              $html .= toUL($value['children'], $indent, $pid);
          }
          $html .= '</option>' . PHP_EOL;
      }

      $html .= '' . PHP_EOL;

      return $html;
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
            <li class="active"><a href="categories.php">Categories</a></li>
            <li ><a href="items.php">Items</a></li>
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

      <!-- Example row of columns -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Update Category</h3>
        </div>

        <form action="" method="POST" enctype="multipart/form-data">
        <div class="panel-body">
              <div class="row">
                <div class="col-md-7">

                      <div class="input-group">
                        <span class="input-group-addon"></span>
                        <input type="text" class="form-control" placeholder="Category name" name="category" required  value="<?php echo $category->category; ?>">
                      </div>

                      <br />
                      <div class="input-group">
                        <span class="input-group-addon"></span>
                        <?php
                              echo "<select class='form-control' style='width:100%;' name='pid'>";
                              echo "<option value='0'>Main Category</option>";
                              echo toUL($categories1, 0, $category->pid);
                              echo "</select>";
                        ?>
                      </div>

                      <br /> 
                      <p>
                          <button type="submit" name="submit" class="btn btn-info"  role="button">Save</button> 
                          <a class="btn btn-info" href="categories.php" role="button">Cancel</a>
                      </p>

                </div>
                <div class="col-md-5">

                  

                  

               </div>
        </div>
        </form><!--/.form -->
      </div>


    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    
  

</body></html>