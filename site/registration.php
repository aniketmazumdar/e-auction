<form id="frmRegistration">
    <!-- Start of registration div -->
    <div id="div-registration">

        <!-- Start of email-id -->
        <div class="form-group has-feedback">
            <label class="control-label" for="txtEmail">Email id:</label>
            <input type="text" class="form-control" id="txtEmail" name="txtEmail" placeholder="Enter your email" required>
            <span class="glyphicon glyphicon-refresh form-control-feedback hide"></span>
        </div>
        <!-- End of email-id -->

        <!-- Start of new password -->
        <div class="form-group has-feedback">
            <label class="control-label" for="pwdNewPassword">New Password:</label>
            <input type="password" class="form-control" id="pwdNewPassword" name="pwdNewPassword" placeholder="Enter new password" required>
            <span class="glyphicon glyphicon-refresh form-control-feedback hide"></span>
        </div>
        <!-- End of new password -->

        <!-- Start of confirm password -->
        <div class="form-group has-feedback">
            <label class="control-label" for="pwdPassword">Confirm Password:</label>

            <input type="password" class="form-control" id="pwdConfirmPassword" name="pwdConfirmPassword" placeholder="Re-enter password" required>

            <span class="glyphicon glyphicon-refresh form-control-feedback hide"></span>
        </div>
        <!-- End of confirm password -->

        <!-- Start of button -->
        <div class="form-group has-feedback text-center">
            <button type="button" class="btn btn-block btn-lg btn-primary" id="btnRegistration">Register</button>
        </div>
        <!-- End of button -->

    </div>
    <!-- End of registration div -->
</form>


<script src="/e-auction/site/js/registration.js"></script>
