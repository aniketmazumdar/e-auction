<!DOCTYPE html>
<html lang="en-IN">
    <head>
        <title id="page-title">e-Auction</title>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="icon" href="/e-auction/site/img/favicon.ico" type="image/x-icon">

		<link rel="stylesheet" href="/e-auction/site/css/bootstrap.min.css">

		<link rel="stylesheet" href="/e-auction/site/css/style.css">
    </head>


    <body id="body-index">

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
                <li class="active"><a href="/e-auction/index.php">Home</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">All Item List <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="all_items.php?id=<?php echo id; ?>">Page 1-1</a></li>
                  </ul>
                </li>
                <li><a href="about_us.php">About Us</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
              </ul>

              <ul class="nav navbar-nav navbar-right" id="ul-right">
                <li id="signup" data-toggle="modal" data-target="#myModal"><a><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li id="login" class="active" data-toggle="modal" data-target="#myModal"><a><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>
            </div>

        </nav>



        <div class="container" id="div-body">

            <!-- Modal start -->
            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog" id="div-modal-dialog"></div>
            </div>
            <!-- Modal end -->

        </div>



        <script src="/e-auction/site/js/jquery.min.js"></script>
		<script src="/e-auction/site/js/bootstrap.min.js"></script>

        <script src="/e-auction/site/js/index.js"></script>
    </body>
</html>
