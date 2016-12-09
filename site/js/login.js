/******************************************************************************************
                                          LOG IN
*******************************************************************************************/
$(document).ready(function(){
/* ---------------------------------- script start ------------------------------------ */

    // importing all-validation-functions page to this page
    var imported = document.createElement('script');
    imported.src = '/e-auction/site/js/all-validation-functions.js';
    document.head.appendChild(imported);



    // creating variables for all input fields
    var txtEmail           =   $('#txtEmail')
    var pwdPassword        =   $('#pwdPassword')


    // for all fields data validation check
    var isValidEmail    =   false;



    // txtEmail formate validation check
    txtEmail.change(function() {
        isValidEmail = emailFormateValidationCheck(txtEmail);
    })



    $('#btnLogin').click(function() {
        if (isValidEmail) {
            $.ajax({
                url: '/e-auction/site/script/login-script.php',
                type: 'POST',
                data: $("#frmLogin").serialize(),
                success: function(response) {
                    var resData = $.parseJSON(response)
                    //alert(response)
                    if(resData){
                        window.location.pathname = "/e-auction/site/profile.php"
                    }
                    else{
                        alert("Email and password aren't matched")
                    }
                },
                error: function(){
                    alert("Error occured")
                }
            });
        }
        else {
            alert("incorrect email formate!");
        }
    })

/* -------------------------------------- script end ------------------------------------ */
});
