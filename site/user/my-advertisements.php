<!DOCTYPE html>
<html lang="en-IN">
    <head>
        <title id="page-title">My Advertisements</title>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="icon" href="/e-auction/site/img/favicon.ico" type="image/x-icon">

		<link rel="stylesheet" href="/e-auction/site/css/bootstrap.min.css">

		<link rel="stylesheet" href="/e-auction/site/css/style.css">
    </head>


    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-action-tabs">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/e-auction/index.php"><img src="/e-auction/site/img/icon.png" alt="icon" /></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-action-tabs">
              <ul class="nav navbar-nav navbar-center">
                <li class="active"><a href="my_advertisements.php">My Advertisements</a></li>
                <li><a href="my_bidded_items.php">My Bidded Items</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">All Item List <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="all_items.php?id=<?php echo id; ?>">Page 1-1</a></li>
                  </ul>
                </li>
                <li><a href="new_advertisement.php">Upload Advertisement</a></li>
              </ul>

              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span> Settings <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Edit Profile</a></li>
                      <li><a href="#">Change Security</a></li>
                    </ul>
                </li>
                <li><a href="logout_code.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
              </ul>
            </div>
          </div>
        </nav>




        <div class="container div-body">

            <!-- start of adv-base structure -->
            <div class="row" id="adv-base">

                <!-- start of adv-heading -->
                <div class="row" id="adv-heading">
                    <!-- start of adv category and id -->
                    <div class="col-md-4">
                        <div class="row">
                            <label for="">Category: </label>
                            blabla
                        </div>
                        <div class="row">
                            <label for="">Item Id: </label>
                            blabla
                        </div>
                    </div>
                    <!-- end of adv category and id -->
                    <!-- start of adv remaining time and bidding status -->
                    <div class="col-md-4 pull-right">
                        <div class="row">
                            <label for="">Remaining Time: </label>
                            blabla
                        </div>
                        <div class="row">
                            <label for="">Bidding Status: </label>
                            blabla
                        </div>
                    </div>
                    <!-- end of adv remaining time and bidding status -->
                </div>
                <!-- end of adv-heading -->

                <!-- start of adv-body -->
                <div class="row" id="adv-body">
                    <!-- start of adv item pic -->
                    <div class="col-md-4">
                        <div class="row">
                            <img src="" id="img-my-adv" alt="item_pic" />
                        </div>
                    </div>
                    <!-- end of adv item pic -->

					<!-- start of adv description and button  -->
					<div class="col-md-8">
                        <!-- start of adv title  -->
                        <div class="row">
                            <label for="">Title:</label>
                            <content select="">blabla...</content>
                        </div>
                        <!-- end of adv title -->
                        <!-- start of adv last bidding price and last bidder  -->
                        <div class="row">
                            <!-- start of adv last bidding price -->
                            <div class="col-md-6">
                                <label for="">Last Bidding Price: </label>

                            </div>
                            <!-- end of adv last bidding price -->
                            <!-- start of adv last bidder -->
                            <div class="col-md-6">
                                <label for="">Last Bidder Name: </label>

                            </div>
                            <!-- end of adv last bidder -->
                        </div>
                        <!-- end of adv last bidding price and last bidder -->
                        <!-- start of adv last bidding time and number of bidder  -->
                        <div class="row">
                            <!-- start of adv last bidding time -->
                            <div class="col-md-6">
                                <label for="">Last Bidding Time: </label>

                            </div>
                            <!-- end of adv last bidding time -->
                            <!-- start of adv number of bidder -->
                            <div class="col-md-6">
                                <label for="">Number of Bidders: </label>

                            </div>
                            <!-- end of adv number of bidder -->
                        </div>
                        <!-- end of adv last bidding time and number of bidder -->
                        <!-- start of adv bidding history and contact  -->
                        <div class="row">
                            <!-- start of adv bidding history -->
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary" name="button">Bidding History</button>
                            </div>
                            <!-- end of adv bidding history -->
                            <!-- start of adv contact -->
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary" name="button">Contact Edit/Cancel Advertisement</button>
                            </div>
                            <!-- end of adv contact -->
                        </div>
                        <!-- end of adv bidding history and contact -->
					</div>
					<!-- end of adv description and button -->

                </div>
                <!-- end of adv-body -->

            </div>
            <!-- end of adv-base structure -->


        </div>



        <script src="/e-auction/site/js/jquery.min.js"></script>
		<script src="/e-auction/site/js/bootstrap.min.js"></script>
    </body>
</html>
