<link rel="stylesheet" href="/e-auction/site/css/style.css">

<form id="frmProfilePhoto" enctype="multipart/form-data">
    <div class="row text-center">
        <!-- Start of confirmation info about photo file -->
    	<a href="" data-toggle="modal" data-target="#myModal">Profile photo information</a>
        <!-- End of confirmation info about photo file -->

        <!-- Start of profile-photo div -->
    	<div class="form-group has-feedback">
    		<label for="filPhoto"><img id="img-profile-photo" alt="profile photo"></label>
    		<input type="file" class="form-control hide" id="filPhoto" name="filPhoto">
    		<span class="glyphicon form-control-feedback"></span>
    	</div>
        <!-- End of profile-photo div -->

        <!-- Start of upload-photo-button div -->
        <div id="div-upload-photo">
        	<button type="submit" class="btn btn-lg btn-default" id="btnUploadPhoto"><span class="glyphicon glyphicon-arrow-up"></span> Upload</button>
        </div>
        <!-- End of upload-photo-button div -->
    </div>
</form>


<!-- Modal start -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm" id="div-modal-dialog">
        <!-- Modal content start-->
        <div class="modal-content">
            <div class="modal-body">
                <p>
                    File formate should be jpg, jpeg, png or gif. <br><br>
                    File size should be less than 500kb.
                </p>
           </div>
        </div>
        <!-- Modal content end-->
    </div>
</div>
<!-- Modal end -->

<script src="/e-auction/site/js/profile-photo.js"></script>
