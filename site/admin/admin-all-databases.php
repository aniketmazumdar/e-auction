<!DOCTYPE html>
<html lang="en-IN">
    <head>
        <title id="page-title">All Databases</title>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="icon" href="/e-auction/site/img/favicon.ico" type="image/x-icon">

		<link rel="stylesheet" href="/e-auction/site/css/bootstrap.min.css">

		<link rel="stylesheet" href="/e-auction/site/css/style.css">
        <link rel="stylesheet" href="/e-auction/site/css/style2.css">
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
                <li><a href="/e-auction/index.php">Profile</a></li>
                <li><a href="about_us.php">Member Registration</a></li>
                <li class="dropdown active">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">All Database <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="all_items.php?id=<?php echo id; ?>">Page 1-1</a></li>
                  </ul>
                </li>
              </ul>

              <ul class="nav navbar-nav navbar-right" id="ul-right">
                <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
              </ul>

            </div>

        </nav>



        <div class="container-fluid" id="div-body">


            <div class="nav-side-menu">
                <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
                <div class="menu-list">
                    <ul id="menu-content" class="menu-content collapse out">

                        <li data-toggle="collapse" data-target="#admin_side_databases" class="collapsed">
                          <a href="#">ADMIN SIDE DATABASES <span class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="admin_side_databases">
                          <li>WEBPAGE_PATH_MASTER</li>
                          <li>WEBPAGE_MASTER</li>
                          <li>NAV_TAB_MASTER</li>
        				  <li>SALUTATION_MASTER</li>
        				  <li>COUNTRY_MASTER</li>
        				  <li>STATE_MASTER</li>
        				  <li>CITY_MASTER</li>
        				  <li>SECURITY_QUESTION_MASTER</li>
        				  <li>CATEGORY_MASTER</li>
                        </ul>

        				<li data-toggle="collapse" data-target="#user_side_databases" class="collapsed">
                          <a href="#">USER SIDE DATABASES <span class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="user_side_databases">
                          <li>MEMBER_MASTER</li>
                          <li>AUCTION_ITEM_MASTER</li>
                          <li>BIDDING_MASTER</li>
                        </ul>

                    </ul>
                 </div>
            </div>


        </div>




        <script src="/e-auction/site/js/jquery.min.js"></script>
		<script src="/e-auction/site/js/bootstrap.min.js"></script>

        <script src="/e-auction/site/js/style.js"></script>
        <script src="/e-auction/site/js/form-validation.js"></script>

    </body>
</html>
