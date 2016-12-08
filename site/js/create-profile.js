/******************************************************************************************
                                    CREATE PROFILE
*******************************************************************************************/
$(document).ready(function(){
/* ---------------------------------- script start ------------------------------------ */

    // importing all-validation-functions page to this page
    var imported = document.createElement('script');
    imported.src = '/e-auction/site/js/all-validation-functions.js';
    document.head.appendChild(imported);


    // load profile-photo.php in create profile page
    $("#div-profile-photo").load('/e-auction/site/profile-photo.php');


    // creating variables for all input fields
    var selMemberType           =   $('#selMemberType');

    var selSalutation           =   $('#selSalutation');
    var txtFirstName            =   $('#txtFirstName');
    var txtMiddleName           =   $('#txtMiddleName');
    var txtLastName             =   $('#txtLastName');
    var dtDateOfBirth           =   $('#dtDateOfBirth');

    var selCountry              =   $('#selCountry');
    var selState                =   $('#selState');
    var txtDistrict             =   $('#txtDistrict');
    var selCity                 =   $('#selCity');
    var txtAddress1             =   $('#txtAddress1');
    var txtAddress2             =   $('#txtAddress2');
    var txtZipCode              =   $('#txtZipCode');

    var txtAltEmail             =   $('#txtAlternateEmail');
    var txtPhone                =   $('#txtPhone');
    var txtFax                  =   $('#txtFax');

    var selSecurityQuestion     =   $('#selSecurityQuestion');
    var txtSecurityAnswer       =   $('#txtSecurityAnswer');

    var filPhoto                =   $('#filPhoto');


    // for all fields data validation checking
    var isValidZip = false;
    var isValidAltEmail = true;
    var isValidPhone = false;
    var isValidFax = true;


    //Disabling all fields
    disablePersonalInfoFields();
    disableMailingAddressFields();
    txtSecurityAnswer.prop('disabled', true);


    // showProgress
    showProgress(selSalutation);
    showProgress(selCountry);
    showProgress(selState);
    showProgress(selCity);
    showProgress(selSecurityQuestion);


    // collapse properties of every section
    $('#div-personal-info').addClass('in');
    $('#div-mailing-address').removeClass('in');
    $('#div-contact-address').removeClass('in');
    $('#div-security-info').removeClass('in');
    $('#div-profile-photo').removeClass('in');

    // hide elements
    $('#frmCreateProfile').removeClass('hide');
    $('#frmProfilePhoto').addClass('hide');
    $('#div-upload-photo').addClass('hide');
    $('#div-delete-photo').addClass('hide');
    $('#btnCompleteRegistration').addClass('hide');



    // to fetch salutation data
    $.ajax({
        url: '/e-auction/site/script/fetching-script.php',
        type: 'POST',
        data: {
            table               : "SALUTATION_MASTER",
            attribute           : "*",
            selectedAttribute   : "SALUTATION_ID",
            conditionalOperator : ">",
            selectedData        : "0"
        },
        success:function(response){
            //alert(response)
            var sal_arr = $.parseJSON(response);

            resetSelectOptions(selSalutation, "salutation");
            for (var x in sal_arr) {
                selSalutation.append($('<option>', {
                    value: sal_arr[x].SALUTATION_ID,
                    text:  sal_arr[x].SALUTATION_NAME
                }))
            }
            hideProgress(selSalutation);
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
    		alert("Status: " + textStatus+" Error: " + errorThrown)
    	}
    })

    // personal info fields disable/enable by selSalutation selection
    selSalutation.change(function() {
        disablePersonalInfoFields();

        if (this.value > 0) {
            enablePersonalInfoFields();
        }
    })



    // to fetch country data
    $.ajax({
        url: '/e-auction/site/script/fetching-script.php',
        type: 'POST',
        data: {
            table               : "COUNTRY_MASTER",
            attribute           : "*",
            selectedAttribute   : "COUNTRY_ID",
            conditionalOperator : ">",
            selectedData        : "0"
        },
        success:function(response){
            //alert(response)
            var con_arr = $.parseJSON(response);

            resetSelectOptions(selCountry, "country");
            for (var x in con_arr) {
                selCountry.append($('<option>', {
                    value: con_arr[x].COUNTRY_ID,
                    text:  con_arr[x].COUNTRY_NAME
                }))
            }
            hideProgress(selCountry);
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
    		alert("Status: " + textStatus+" Error: " + errorThrown)
    	}
    })

    // selState field disable/enable and fetched selected data by selCountry selection
    selCountry.change(function() {
        resetSelectOptions(selState, "state");

        // to fetch state data
        $.ajax({
            url: '/e-auction/site/script/fetching-script.php',
            type: 'POST',
            data: {
                table               : "STATE_MASTER",
                attribute           : "*",
                selectedAttribute   : "COUNTRY_ID",
                conditionalOperator : "=",
                selectedData        : selCountry.val()
            },
            success:function(response){
                var stat_arr = $.parseJSON(response)
                //alert(response)
                resetSelectOptions(selState, "state")
                for (var x in stat_arr) {
                    selState.append($('<option>', {
                        value: stat_arr[x].STATE_ID,
                        text:  stat_arr[x].STATE_NAME
                    }))
                }
                hideProgress(selState)
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
        		alert("Status: " + textStatus+" Error: " + errorThrown)
        	}
        })

        disableMailingAddressFields()
        if(this.value > 0){
            selState.prop('disabled', false)
        }
    })

    // mailing address fields disable/enable by selState selection
    selState.change(function() {
        disableMailingAddressFields()
        selState.prop('disabled', false)

        if(this.value > 0){
    		enableMailingAddressFields()
    	}
    })



    // fetching selected selCity data by selState selection
    selState.change(function() {
        resetSelectOptions(selCity, "city")

        // to fetch city data
        $.ajax({
            url: '/e-auction/site/script/fetching-script.php',
            type: 'POST',
            data: {
                table               : "CITY_MASTER",
                attribute           : "*",
                selectedAttribute   : "STATE_ID",
                conditionalOperator : "=",
                selectedData        : selState.val()
            },
            success:function(response){
                var city_arr = $.parseJSON(response)
                //alert(response)
                resetSelectOptions(selCity, "city")
                for (var x in city_arr) {
                    selCity.append($('<option>', {
                        value: city_arr[x].CITY_ID,
                        text:  city_arr[x].CITY_NAME
                    }))
                }
                hideProgress(selCity)
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
        		alert("Status: " + textStatus+" Error: " + errorThrown)
        	}
        })
    })



    // zip code changing
    txtZipCode.change(function() {
        if (this.value) {
            isValidZip = zipValidationCheck(txtZipCode);
        }
        else {
            alert("Zip Code is empty!");
            isValidZip = false;
        }
    });



    // email field changing
    txtAltEmail.change(function() {
        if (this.value) {   // if field is not empty
            var resVal = emailFormateValidationCheck(txtAltEmail)
            if(resVal){     // email formate is correct
                // ajax is called for validation
                $.ajax({
                    url : '/e-auction/site/script/validate-email-script.php',
                    type : 'POST',
                    data : {
                        email : txtAltEmail.val()
                    },
                    success : function(response) {
                        isValidAltEmail = $.parseJSON(response);

                        if (isValidAltEmail) {     // emailId doesn't exist
                            //alert("email-id valid!")
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
            isValidAltEmail = true;
        }
    });



    // phone number change and validation check
    txtPhone.change(function() {
        if(this.value){     // if field is not empty
            isValidPhone = phoneNumberValidationCheck(txtPhone);
        }
        else{
            alert("Phone number is empty!");
            isValidPhone = false;
        }
    })



    // fax number change and validation check
    txtFax.change(function() {
        if(this.value){     // if field is not empty
            isValidFax = faxNumberValidationCheck(txtPhone);
        }
        else{
            isValidFax = true;
        }
    })



    // to fetch security question
    $.ajax({
        url: '/e-auction/site/script/fetching-script.php',
        type: 'POST',
        data: {
            table               : "SECURITY_QUESTION_MASTER",
            attribute           : "*",
            selectedAttribute   : "SECURITY_QUESTION_ID",
            conditionalOperator : ">",
            selectedData        : "0"
        },
        success:function(response){
            var ques_arr = $.parseJSON(response)
            //alert(response)
            resetSelectOptions(selSecurityQuestion, "question");
            for (var x in ques_arr) {
                selSecurityQuestion.append($('<option>', {
                    value: ques_arr[x].SECURITY_QUESTION_ID,
                    text:  ques_arr[x].SECURITY_QUESTION_DETAILS
                }))
            }
            hideProgress(selSecurityQuestion);
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert("Status: " + textStatus+" Error: " + errorThrown);
        }
    })

    // security answer disabled/enabled by selSecurityQuestion changing
    selSecurityQuestion.change(function() {
        txtSecurityAnswer.prop('disabled', true);

        if (this.value > 0) {
            txtSecurityAnswer.prop('disabled', false);
        }
    })



    // sending registration form's all data to member_registration_script
    $('#btnSaveCreateProfile').click(function(){
        if(selSalutation.val() && txtFirstName.val() && txtLastName.val() && dtDateOfBirth.val()) {
            $('#div-personal-info').removeClass('in');
            $('#div-mailing-address').addClass('in');

            if (selCountry.val() && selState.val() && txtAddress1.val() && isValidZip) {
                $('#div-mailing-address').removeClass('in');
                $('#div-contact-address').addClass('in');

                if (isValidAltEmail && isValidPhone && isValidFax) {
                    $('#div-contact-address').removeClass('in');
                    $('#div-security-info').addClass('in');

                    if(selSecurityQuestion.val() && txtSecurityAnswer.val()){
                        $('#div-security-info').removeClass('in');

                        $.ajax({
                            url: '/e-auction/site/script/create-profile-script.php',
                            type: 'POST',
                            data: $("#frmCreateProfile").serialize(),
                            success: function(response) {
                                var resData = $.parseJSON(response);
                                alert(resData);

                                if (resData) {  // data are saved in database
                                    $('#div-profile-photo').addClass('in');
                                    $('#btnSaveCreateProfile').addClass('hide');
                                    $('#btnCompleteRegistration').removeClass('hide');
                                }
                                else{
                                    alert("Invalid data entered");
                                }
                            },
                            error: function(){
                                alert("Error occured");
                            }
                        });
                    }
                }
            }
        }
    });



    $.ajax({
        url: '/e-auction/site/script/email-fetching-script.php',
        type: 'GET',
        success: function(response) {
            var resData = $.parseJSON(response);

            if(resData){
                $('#div-personal-info').removeClass('in');
                $('#div-profile-photo').addClass('in');
                $('#btnSaveCreateProfile').addClass('hide');
                $('#btnCompleteRegistration').removeClass('hide');
            }
            //alert(response);
        },
    });



    // btnComplete click
    $('#btnCompleteRegistration').click(function() {
        window.location.pathname = "/e-auction/index.php";
        alert("Registration successful");
    });



    /*--------------------------------------------------------------------------------------
                                        called functions
    ----------------------------------------------------------------------------------------*/

    function disablePersonalInfoFields(){
        txtFirstName.prop('disabled', true);
        txtMiddleName.prop('disabled', true);
        txtLastName.prop('disabled', true);
        dtDateOfBirth.prop('disabled', true);

        // refresh fields
        txtFirstName.prop('value', '');
        txtMiddleName.prop('value', '');
        txtLastName.prop('value', '');
        dtDateOfBirth.prop('value', '');
    }

    function enablePersonalInfoFields(){
        txtFirstName.prop('disabled', false);
        txtMiddleName.prop('disabled', false);
        txtLastName.prop('disabled', false);
        dtDateOfBirth.prop('disabled', false);
    }

    function disableMailingAddressFields(){
        selState.prop('disabled', true);
        txtDistrict.prop('disabled', true);
        selCity.prop('disabled', true);
        txtAddress1.prop('disabled', true);
        txtAddress2.prop('disabled', true);
        txtZipCode.prop('disabled', true);

        // refresh fields
        txtDistrict.prop('value', '');
        txtAddress1.prop('value', '');
        txtAddress2.prop('value', '');
        txtZipCode.prop('value', '');
    }

    function enableMailingAddressFields(){
        selState.prop('disabled', false);
        txtDistrict.prop('disabled', false);
        selCity.prop('disabled', false);
        txtAddress1.prop('disabled', false);
        txtAddress2.prop('disabled', false);
        txtZipCode.prop('disabled', false);
    }




    function resetSelectOptions(selectControl, optionType) {
    	selectControl.empty()
    	selectControl.append($('<option>', {
    		value : "",
    		text : "-- Select " + optionType + " --"
    	}))
    }


    function showProgress(inputField) {
    	/* Show the refresh icon */
    	inputField.siblings(".glyphicon-refresh").removeClass("hidden")
    }


    function hideProgress(inputField) {
    	/* Hide the refresh icon */
    	inputField.siblings(".glyphicon-refresh").addClass("hidden")
    }

/* -------------------------------------- script end ------------------------------------ */
});
