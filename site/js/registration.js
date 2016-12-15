/******************************************************************************************
                                        REGISTRATION
*******************************************************************************************/
$(document).ready(function(){
/* ---------------------------------- script start ------------------------------------ */

    // importing all-validation-functions page to this page
    var imported = document.createElement('script');
    imported.src = '/e-auction/site/js/all-validation-functions.js';
    document.head.appendChild(imported);



    // creating variables for all input fields
    var txtEmail                    =   $('#txtEmail');
    var pwdNewPassword              =   $('#pwdNewPassword');
    var pwdConfirmPassword          =   $('#pwdConfirmPassword');


    // defining temp variables
    var isValidEmail        = false;
    var isValidPassword     = false;
    var isMatchedPassword   = false;


    // disabling input fields
    disabledFields();



    // email field changing
    txtEmail.change(function() {
        disabledFields();

        isValidEmail = false;

        if (this.value) {   // if field is not empty
            var resVal = emailFormateValidationCheck(txtEmail);
            if(resVal){     // email formate is correct
                // ajax is called for validation
                $.ajax({
                    url : '/e-auction/site/script/validate-email-script.php',
                    type : 'POST',
                    data : {
                        email : txtEmail.val()
                    },
                    success : function(response) {
                        isEmailExist = $.parseJSON(response);
                        //alert(response);
                        if (isEmailExist == false) {     // emailId doesn't exist
                            isValidEmail = true;
                            //alert("email-id valid!")
                            enabledFields();
                        }
                        else {     // emailId exists
                            alert("email-id already exists!");
                        }
                    },
                    error : function(XMLHttpRequest, textStatus, errorThrown) {
                        alert("Status: " + textStatus+" Error: " + errorThrown);
                    }
                });
            }
        }
        else {
            alert("Email is empty!");
            isValidEmail = false;
        }
    });



    // new password changing
    pwdNewPassword.change(function() {
        if (this.value) {
            isValidPassword = passwordFormateValidationCheck(pwdNewPassword);
        }
        else {
            alert("New password is empty!");
            isValidPassword = false;
        }
    });



    // confirm password changing
    pwdConfirmPassword.change(function() {
        if (this.value) {
            isMatchedPassword = passwordMatchCheck(pwdNewPassword, pwdConfirmPassword);
        }
        else {
            alert("Confirm password is empty!");
        }
    });



    // clicking btnRegistration
    $('#btnRegistration').click(function() {
        if (isValidEmail && isValidPassword && isMatchedPassword) {
            // ajax sending data to the script page
            $.ajax({
                url: '/e-auction/site/script/registration-script.php',
                type: 'POST',
                data: $("#frmRegistration").serialize(),
                success: function(response) {
                    //alert(response)
                    var resData = $.parseJSON(response);
                    if (resData) {
                        window.location.pathname = "/e-auction/site/create-profile.php";
                        //alert("Registration successful");
                    }
                    else{
                        alert("Registration fail");
                    }
                },
                error: function(){
                    alert("Error occured");
                }
            })
        }
        else {
            alert("Incorrect data entered!");
        }
    })



    /*--------------------------------------------------------------------------------------
                                        called functions
    ----------------------------------------------------------------------------------------*/

    function disabledFields(){
        // disabling input fields
        pwdNewPassword.prop('disabled', true);
        pwdConfirmPassword.prop('disabled', true);
        $('#btnRegistration').attr('disabled', true);

        // made fields empty
        pwdNewPassword.prop('value', '');
        pwdConfirmPassword.prop('value', '');
    }

    function enabledFields(){
        // disabling input fields
        pwdNewPassword.prop('disabled', false);
        pwdConfirmPassword.prop('disabled', false);
        $('#btnRegistration').removeAttr('disabled');
    }

/* -------------------------------------- script end ------------------------------------ */
});
