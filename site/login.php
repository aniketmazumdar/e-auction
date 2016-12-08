<form id="frmLogin">
    <!-- Start of log-in div -->
    <div id="div-login">

        <!-- Start of email-id -->
        <div class="form-group has-feedback">
            <label class="control-label" for="txtEmail">Email id:</label>

            <input type="text" class="form-control" id="txtEmail" name="txtEmail" placeholder="Enter your email" required>

            <span class="glyphicon glyphicon-refresh form-control-feedback hide"></span>
        </div>
        <!-- End of email-id -->

        <!-- Start of password -->
        <div class="form-group has-feedback">
            <label class="control-label" for="pwdPassword">Password:</label>

            <input type="password" class="form-control" id="pwdPassword" name="pwdPassword" placeholder="Enter your password" required>

            <span class="glyphicon glyphicon-refresh form-control-feedback hide"></span>
        </div>
        <!-- End of password -->

        <!-- Start of Checkbox -->
        <div class="form-group has-feedback">
            <input type="checkbox" class="form-group" id="chkRemember_me" name="chkRemember_me">

            <label class="control-label" for="chkRemember_me">Remember me</label>
        </div>
        <!-- End of checkbox -->

        <!-- Start of button -->
        <div class="form-group has-feedback text-center">
            <button type="button" class="btn btn-block btn-lg btn-primary" id="btnLogin">Log In</button>
        </div>
        <!-- End of button -->

        <!-- Start of forgot-password link -->
        <div class="row text-center">
            <a href="#">Forgot Password?</a>
        </div>
        <!-- Start of forgot-password link -->

    </div>
    <!-- End of log-in div -->
</form>


<script src="/e-auction/site/js/login.js"></script>
