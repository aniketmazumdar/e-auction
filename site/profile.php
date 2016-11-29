<!DOCTYPE html>
<html lang="en-IN">
    <head>
        <title id="page-title">Profile</title>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="icon" href="/e-auction/site/img/favicon.ico" type="image/x-icon">

		<link rel="stylesheet" href="/e-auction/site/css/bootstrap.min.css">

		<link rel="stylesheet" href="/e-auction/site/css/style.css">
    </head>



    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">

            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-action-tabs">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php $page_index; ?>"><img src="/e-auction/site/img/icon.png" alt="icon" /></a>
            </div>

            <div class="collapse navbar-collapse" id="div-action-tabs">
              <ul class="nav navbar-nav" id="ul-center">
                <li class="active"><a href="/e-auction/index.php">Profile</a></li>
                <li><a href="about_us.php">New Account</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">All Database <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="all_items.php?id=<?php echo id; ?>">Page 1-1</a></li>
                  </ul>
                </li>
              </ul>

              <ul class="nav navbar-nav navbar-right" id="ul-right">
                <li><a href="#"><span class="glyphicon glyphicon-wrench"></span> Settings</a></li>
                <li class="active"><a href="#"><span class="glyphicon glyphicon-off"></span> Log out</a></li>
              </ul>
            </div>

        </nav>




        <div class="container" id="div-body">


        </div>




        <script src="/e-auction/site/js/jquery.min.js"></script>
		<script src="/e-auction/site/js/bootstrap.min.js"></script>

        <script src="/e-auction/site/js/style.js"></script>
        <script src="/e-auction/site/js/form-validation.js"></script>

    </body>
</html>
