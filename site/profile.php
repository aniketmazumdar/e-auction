<?php
    require_once $_SERVER['DOCUMENT_ROOT']."/e-auction/site/script/profile-script.php";
?>


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

            <!-- Start of head-section div -->
            <div class="row text-center" id="div-head-section">
                <div class="text-right">
                    <a href="edit-profile.php"><span class="glyphicon glyphicon-edit"></span> Edit Profile</a>
                </div>

                <!-- Start of profile-photo div -->
                <div class="" id="div-profile-photo">
                    <img id="img-profile-photo" src="<?php echo $photo ?>" alt="profile photo" data-toggle="modal" data-target="#myModal">
                </div>
                <!-- End of profile-photo div -->

                <!-- Start of member-name div -->
                <div class="" id="div-member-name">
                    <h1><?php echo $name ?></h1>
                </div>
                <!-- End of member-name div -->

                <!-- Start of member-dob div -->
                <div class="" id="div-member-name">
                    <h4>Date of Birth: <?php echo $dateOfBirth ?></h4>
                </div>
                <!-- End of member-dob div -->
            </div>
            <!-- End of head-section div -->


            <div class="row btn-group-lg text-center" id="div-btn-group">
                <button type="button" class="btn btn-lg btn-default" id="btn-mailing-address"><span class="glyphicon glyphicon-home"></span> Mailing Adress</button>
                <button type="button" class="btn btn-lg btn-default" id="btn-contact-address"><span class="glyphicon glyphicon-envelope"></span> Contact Adress</button>
            </div>


            <div class="row panel-group text-center" id="div-foot-section">
                <div class="panel-body" id="div-mailing-address">
                    <address>
                        <?php echo $addressLine1 ?> <br>
                        <?php echo $addressLine2 ?> <br>
                        <?php echo $addressLine3 ?>
                    </address>
                </div>

                <div class="panel-body" id="div-contact-address">
                    <address>
                        <span class="glyphicon glyphicon-envelope"></span> <?php echo $email ?> <br>
                        <span class="glyphicon glyphicon-phone"></span> <?php echo $phone ?>
                        <?php
                            if(isset($fax)){
                        ?>
                                , <span class="glyphicon glyphicon-print"></span>
                        <?php
                                echo $fax;
                            }
                        ?>
                    </address>
                </div>
            </div>

        </div>

        <!-- Modal start -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-sm" id="div-modal-dialog">
                <img src="<?php echo $photo ?>" alt="profile-photo" id="img-large">
            </div>
        </div>
        <!-- Modal end -->



        <script src="/e-auction/site/js/jquery.min.js"></script>
		<script src="/e-auction/site/js/bootstrap.min.js"></script>

        <script src="/e-auction/site/js/profile.js"></script>

    </body>
</html>
