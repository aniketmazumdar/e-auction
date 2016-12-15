<?php
    session_start();
    if(empty($_SESSION["email"]) && empty($_SESSION["password"])){
        header("location: /e-auction/index.php");
    }


 ?>



<!DOCTYPE html>
<html lang="en-IN">
    <head>
        <title id="page-title">Create Profile</title>

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
                <li><a href="member_registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li class="active"><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>
            </div>

        </nav>




        <div class="container" id="div-body">

            <!-- Start of create profile form -->
            <form id="frmCreateProfile">
                <!-- Start of member type div -->
                <div class="row" id="div-member-type">
                    <div class="pull-right">
                        <label class="control-label" for="selMemberType">Registration for</label>
                        <select class="form-control" id="selMemberType" name="selMemberType" data-toggle="tooltip" title="Select member type" required>
                            <option value="0">USER</option>
                            <option value="1">ADMIN</option>
                        </select>
                    </div>
                </div>
                <!-- End of member type div -->

                <!-- Start of panel group div -->
                <div class="row panel-group" id="div-create-profile">

                    <!-- Start of personal-info div -->
                    <div class="panel panel-default">
                        <div class="panel-heading" data-toggle="collapse" data-parent="#div-create-profile">
                            <h1 class="panel-title">Personal Info</h1>
                        </div>
                        <div id="div-personal-info" class="panel-collapse collapse">
                            <div class="panel-body">
                                <!-- Start of salutation, first name, middle name and last name -->
                                <div class="row">
                                    <!-- Start of salutation -->
                                    <div class="col-sm-3 col-md-3">
                                        <div class="form-group has-feedback">
                                            <label class="control-label" for="selSalutation">Salutation<span>*</span></label>
                                            <select class="form-control" id="selSalutation" name="selSalutation" data-toggle="tooltip" title="Select your salutation" required></select>
                                            <span class="glyphicon glyphicon-refresh form-control-feedback hidden"></span>
                                        </div>
                                    </div>
                                    <!-- End of salutation -->

                                    <!-- Start of first name -->
                                    <div class="col-sm-3 col-md-3">
                                        <div class="form-group has-feedback">
                                            <label class="control-label" for="txtFirstName">First Name<span>*</span></label>
                                            <input type="text" class="form-control" id="txtFirstName" name="txtFirstName" placeholder="Enter first name" required>
                                            <span class="glyphicon form-control-feedback"></span>
                                        </div>
                                    </div>
                                    <!-- End of first name -->

                                    <!-- Start of middle name -->
                                    <div class="col-sm-3 col-md-3">
                                        <div class="form-group has-feedback">
                                            <label class="control-label" for="txtMiddleName">Middle Name</label>
                                            <input type="text" class="form-control" id="txtMiddleName" name="txtMiddleName" placeholder="Enter middle name">
                                        </div>
                                    </div>
                                    <!-- End of middle name -->

                                    <!-- Start of last name -->
                                    <div class="col-sm-3 col-md-3">
                                        <div class="form-group has-feedback">
                                            <label class="control-label" for="txtLastName">Last Name<span>*</span></label>
                                            <input type="text" class="form-control" id="txtLastName" name="txtLastName" placeholder="Enter last name" required>
                                            <span class="glyphicon form-control-feedback"></span>
                                        </div>
                                    </div>
                                    <!-- End of last name -->
                                </div>
                                <!-- End of salutation, first name, middle name and last name -->

                                <!-- Start of date of birth, profile-photo and info -->
                                <div class="row">
                                    <!-- Start of date of birth -->
                                    <div class="col-sm-3 col-md-3">
                                        <div class="form-group has-feedback">
                                            <label class="control-label" for="dtDateOfBirth">Date of Birth<span>*</span></label>
                                            <input type="date" class="form-control" id="dtDateOfBirth" name="dtDateOfBirth" required>
                                            <span class="glyphicon form-control-feedback"></span>
                                        </div>
                                    </div>
                                    <!-- End of first date of birth -->
                                </div>
                                <!-- End of date of birth, profile-photo and info -->
                            </div>
                        </div>
                    </div>
                    <!-- End of personal-info div -->


                    <!-- Start of mailing-address div -->
                    <div class="panel panel-default">
                        <div class="panel-heading" data-toggle="collapse" data-parent="#div-create-profile">
                            <h1 class="panel-title">Mailing Address</h1>
                        </div>
                        <div id="div-mailing-address" class="panel-collapse collapse">
                            <div class="panel-body">
                                <!-- Start of city, district, state and country -->
                                <div class="row">
                                    <!-- Start of country -->
                                    <div class="col-sm-3 col-md-3">
                                        <div class="form-group has-feedback">
                                            <label class="control-label" for="selCountry">Country<span>*</span></label>
                                            <select class="form-control" id="selCountry" name="selCountry" data-toggle="tooltip" title="Select your country" required></select>
                                            <span class="glyphicon glyphicon-refresh form-control-feedback hidden"></span>
                                        </div>
                                    </div>
                                    <!-- End of country -->

                                    <!-- Start of state -->
                                    <div class="col-sm-3 col-md-3">
                                        <div class="form-group has-feedback">
                                            <label class="control-label" for="selState">State<span>*</span></label>
                                            <select class="form-control" id="selState" name="selState" data-toggle="tooltip" title="Select your state" required></select>
                                            <span class="glyphicon glyphicon-refresh form-control-feedback hidden"></span>
                                        </div>
                                    </div>
                                    <!-- End of state -->

                                    <!-- Start of district -->
                                    <div class="col-sm-3 col-md-3">
                                        <div class="form-group has-feedback">
                                            <label class="control-label" for="txtDistrict">District</label>
                                            <input type="text" class="form-control" id="txtDistrict" name="txtDistrict" placeholder="Enter district">
                                        </div>
                                    </div>
                                    <!-- End of district -->

                                    <!-- Start of city -->
                                    <div class="col-sm-3 col-md-3">
                                        <div class="form-group has-feedback">
                                            <label class="control-label" for="selCity">City</label>
                                            <select class="form-control" id="selCity" name="selCity" data-toggle="tooltip" title="Select your city"></select>
                                        </div>
                                    </div>
                                    <!-- End of city -->
                                </div>
                                <!-- End of city, district, state and country -->

                                <!-- Start of address1 and address2 -->
                                <div class="row">
                                    <!-- Start of address1 -->
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group has-feedback">
                                            <label class="control-label" for="txtAddress1">Address-1<span>*</span></label>
                                            <input type="text" class="form-control" id="txtAddress1" name="txtAddress1" placeholder="Enter village/house no./street name" required>
                                            <span class="glyphicon form-control-feedback"></span>
                                        </div>
                                    </div>
                                    <!-- End of address1 -->

                                    <!-- Start of address2 -->
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group has-feedback">
                                            <label class="control-label" for="txtAddress2">Address-2</label>
                                            <input type="text" class="form-control" id="txtAddress2" name="txtAddress2" placeholder="Enter area/post office/police station">
                                        </div>
                                    </div>
                                    <!-- End of address2 -->
                                </div>
                                <!-- End of address1 and address2 -->

                                <!-- Start of zip code -->
                                <div class="row">
                                    <div class="col-sm-3 col-md-3">
                                        <div class="form-group has-feedback">
                                            <label class="control-label" for="txtZipCode">Zip Code<span>*</span></label>
                                            <input type="text" class="form-control" id="txtZipCode" name="txtZipCode" maxlength="6" placeholder="Enter zip code" required>
                                            <span class="glyphicon form-control-feedback"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of zip code -->
                            </div>
                        </div>
                    </div>
                    <!-- End of mailing-address div -->


                    <!-- Start of contact-address div -->
                    <div class="panel panel-default">
                        <div class="panel-heading" data-toggle="collapse" data-parent="#div-create-profile">
                            <h1 class="panel-title">Contact Address</h1>
                        </div>
                        <div id="div-contact-address" class="panel-collapse collapse">
                            <div class="panel-body">
                                <!-- Start of alt-email row -->
                                <div class="row">
                                    <!-- Start of alt-email -->
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group has-feedback">
                                            <label class="control-label" for="txtAlternateEmail">Alternative Email</label>
                                            <input type="text" class="form-control" id="txtAlternateEmail" name="txtAlternateEmail" placeholder="Enter alternative email">
                                            <span class="glyphicon form-control-feedback"></span>
                                        </div>
                                    </div>
                                    <!-- End of alt-email -->
                                </div>
                                <!-- End of alt_email row -->

                                <!-- Start of phone and fax -->
                                <div class="row">
                                    <!-- Start of phone -->
                                    <div class="col-sm-3 col-md-3">
                                        <div class="form-group has-feedback">
                                            <label class="control-label" for="txtPhone">Phone<span>*</span></label>
                                            <input type="text" class="form-control" id="txtPhone" name="txtPhone" maxlength="10" placeholder="Enter phone number" required>
                                            <span class="glyphicon form-control-feedback"></span>
                                        </div>
                                    </div>
                                    <!-- End of phone -->

                                    <!-- Start of fax -->
                                    <div class="col-sm-3 col-md-3">
                                        <div class="form-group has-feedback">
                                            <label class="control-label" for="txtFax">Fax</label>
                                            <input type="text" class="form-control" id="txtFax" name="txtFax" maxlength="10" placeholder="Enter fax number">
                                        </div>
                                    </div>
                                    <!-- End of fax -->
                                </div>
                                <!-- End of phone and fax -->
                            </div>
                        </div>
                    </div>
                    <!-- End of contact-address div -->


                    <!-- Start of security info div -->
                    <div class="panel panel-default">
                        <div class="panel-heading" data-toggle="collapse" data-parent="#div-create-profile">
                            <h1 class="panel-title">Security Information</h1>
                        </div>
                        <div id="div-security-info" class="panel-collapse collapse">
                            <div class="panel-body">
                                <!-- Start of security ques-ans div -->
                                <div class="col-md-3 col-sm-3">
                                    <!-- Start of security_question -->
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="selSecurityQuestion">Security Question<span>*</span></label>
                                        <select class="form-control" id="selSecurityQuestion" name="selSecurityQuestion" data-toggle="tooltip" title="Select your security question" required></select>
                                        <span class="glyphicon glyphicon-refresh form-control-feedback hidden"></span>
                                    </div>
                                    <!-- End of security_question -->

                                    <!-- Start of security_answer -->
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="txtSecurityAnswer">Security Answer<span>*</span></label>
                                        <input type="text" class="form-control" id="txtSecurityAnswer" name="txtSecurityAnswer" placeholder="Enter security answer" required>
                                        <span class="glyphicon form-control-feedback"></span>
                                    </div>
                                    <!-- End of security_answer -->
                                </div>
                                <!-- End of security ques-ans div -->
                            </div>
                        </div>
                    </div>
                    <!-- End of security info div -->


                    <!-- Start of profile photo div -->
                    <div class="panel panel-default">
                        <div class="panel-heading" data-toggle="collapse" data-parent="#div-create-profile" data-target="#div-profile-photo">
                            <h1 class="panel-title">Profile Photo</h1>
                        </div>
                        <div id="div-profile-photo" class="panel-collapse collapse">
                            <div class="panel-body"></div>
                        </div>
                    </div>
                    <!-- End of profile photo div -->

                </div>
                <!-- End of panel group div -->

                <!-- Start of submit-button div -->
                <div class="row text-center">
                    <button type="button" class="btn btn-lg btn-default" id="btnSaveCreateProfile">Save</button>
                    <button type="button" class="btn btn-lg btn-default" id="btnCompleteRegistration"><span class="glyphicon glyphicon-ok"></span> Complete Registration</button>
                </div>
                <!-- End of submit-button div -->
            </form>
            <!-- End of create profile form -->

        </div>


        <script src="/e-auction/site/js/jquery.min.js"></script>
		<script src="/e-auction/site/js/bootstrap.min.js"></script>

        <script src="/e-auction/site/js/create-profile.js"></script>

    </body>
</html>
