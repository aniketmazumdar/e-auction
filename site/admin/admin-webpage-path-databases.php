<!DOCTYPE html>
<html lang="en-IN">
    <head>
        <title id="page-title">Webpage Path Databases</title>

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



        <div class="container" id="div-body">

            <!-- start of div-page-path -->
            <div class="div-section" id="div-page-path">
                <div class="div-header">
                    <h2>WEBPAGE PATH</h2>
                </div>

                <label>DATABASE (WEBPAGE_PATH_MASTER)</label>
                <table class="table table-striped table-bordered" id="tbl-new-path">
                  <thead>
                    <tr>
                      <th>PATH_ID</th>
                      <th>PATH </th>
                      <th>RENDER_STATUS</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td><input type="text" class="form-control" id="txtPath-id" required></td>
                        <td><input type="text" class="form-control" id="txt-Path" required></td>
                        <td><select class="form-control" id="selRender-status" required></td>
                        <td><button type="button" class="btn btn-block btn-primary" id="btnEdit"><span class="glyphicon glyphicon-pencil"></span> Edit</button></td>
                        <td><button type="button" class="btn btn-block btn-danger" id="btnRemove"><span class="glyphicon glyphicon-trash"></span> Delete</button></td>
                    </tr>
                  </tbody>
                </table>


                <label id="lbl-new-path"><span class="glyphicon glyphicon-plus"></span> NEW ENTRY</label>
                <form id="frmPath">
                    <!-- Start of div-new-entry -->
                    <div class="div-new-entry" id="div-new-path">

                        <!-- Start of PATH, RENDER_STATUS -->
                        <div class="row">
                            <!-- Start of PATH -->
                            <div class="col-sm-5 col-md-5">
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="txtPath">PATH</label>

                                    <input type="text" class="form-control" id="txtPath" required>

                                    <span class="glyphicon glyphicon-refresh form-control-feedback hide"></span>
                                </div>
                            </div>
                            <!-- End of PATH_ID -->

                            <!-- Start of RENDER_STATUS -->
                            <div class="col-sm-2 col-md-2">
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="selRender-status">RENDER STATUS</label>

                                    <select class="form-control" id="selRender-status" required>
                                        <option value="0">INVISIBLE</option>
                                        <option value="1" selected>VISIBLE</option>
                                    </select>
                                </div>
                            </div>
                            <!-- End of RENDER_STATUS -->
                        </div>
                        <!-- End of PATH_ID, PATH, RENDER_STATUS -->

                        <!-- Start of submit-button -->
                        <div class="row">
                            <div class="col-sm-2 col-md-2">
                                <button type="button" class="btn btn-primary" id="btnPath"><span class="glyphicon glyphicon-plus"></span> Add Path</button>
                            </div>
                        </div>
                        <!-- End of submit-button -->

                    </div>
                    <!-- End of div-new-entry -->
                </form>
            </div>
            <!-- end of div-page-path -->



            <!-- start of div-page -->
            <div class="div-section" id="div-page">
                <div class="div-header">
                    <h2>WEBPAGE</h2>
                </div>

                <label>DATABASE (WEBPAGE_MASTER)</label>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                        <th>PAGE_ID</th>
                        <th>PAGE_PATH</th>
                        <th>PAGE_NAME</th>
                        <th>PAGE_NAV_TAB_NAME</th>
                        <th>RENDER_STATUS</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td><input type="text" class="form-control" id="txtPage-id" required></td>
                        <td><select class="form-control" id="selPath" required></select></td>
                        <td><input type="text" class="form-control" id="txtPage-name" required></td>
                        <td><input type="text" class="form-control" id="txtNav-tab-name" required></td>
                        <td><select class="form-control" id="selRender-status" required></td>
                        <td><button type="button" class="btn btn-block btn-primary" id="btnEdit"><span class="glyphicon glyphicon-pencil"></span> Edit</button></td>
                        <td><button type="button" class="btn btn-block btn-danger" id="btnRemove"><span class="glyphicon glyphicon-trash"></span> Delete</button></td>
                    </tr>
                  </tbody>
                </table>


                <label id="lbl-new-page"><span class="glyphicon glyphicon-plus"></span> NEW ENTRY</label>
                <form id="frmPage">
                    <!-- Start of div-new-entry -->
                    <div class="div-new-entry" id="div-new-page">

                        <!-- Start of WEBPAGE_PATH, WEBPAGE_NAME, WEBPAGE_NAV_TAB_NAME, RENDER_STATUS -->
                        <div class="row">
                            <!-- Start of WEBPAGE_PATH -->
                            <div class="col-sm-2 col-md-2">
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="selPath">WEBPAGE PATH</label>

                                    <select class="form-control" id="selPath" required></select>
                                    <span class="glyphicon glyphicon-refresh form-control-feedback hide"></span>
                                </div>
                            </div>
                            <!-- End of WEBPAGE_PATH -->

                            <!-- Start of WEBPAGE_NAME -->
                            <div class="col-sm-3 col-md-3">
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="txtPage-name">WEBPAGE NAME</label>

                                    <input type="text" class="form-control" id="txtPage-name" required>

                                    <span class="glyphicon glyphicon-refresh form-control-feedback hide"></span>
                                </div>
                            </div>
                            <!-- End of WEBPAGE_NAME -->

                            <!-- Start of WEBPAGE_NAV_TAB_NAME -->
                            <div class="col-sm-3 col-md-3">
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="txtNav-tab-name">NAV TAB NAME</label>

                                    <input type="text" class="form-control" id="txtNav-tab-name" required>

                                    <span class="glyphicon glyphicon-refresh form-control-feedback hide"></span>
                                </div>
                            </div>
                            <!-- End of WEBPAGE_NAV_TAB_NAME -->

                            <!-- Start of RENDER_STATUS -->
                            <div class="col-sm-2 col-md-2">
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="selRender-status">RENDER STATUS</label>

                                    <select class="form-control" id="selRender-status" required>
                                        <option value="0">INVISIBLE</option>
                                        <option value="1" selected>VISIBLE</option>
                                    </select>
                                </div>
                            </div>
                            <!-- End of RENDER_STATUS -->
                        </div>
                        <!-- End of WEBPAGE_PATH, WEBPAGE_NAME, WEBPAGE_NAV_TAB_NAME, RENDER_STATUS -->

                        <!-- Start of submit-button -->
                        <div class="row">
                            <div class="col-sm-2 col-md-2">
                                <button type="button" class="btn btn-primary" id="btnPage"><span class="glyphicon glyphicon-plus"></span> Add Page</button>
                            </div>
                        </div>
                        <!-- End of submit-button -->

                    </div>
                    <!-- End of div-new-entry -->
                </form>
            </div>
            <!-- end of div-page -->


        </div>





        <script src="/e-auction/site/js/jquery.min.js"></script>
		<script src="/e-auction/site/js/bootstrap.min.js"></script>

        <script src="/e-auction/site/js/form-validation.js"></script>
        <script src="/e-auction/site/js/style.js"></script>

    </body>
</html>
