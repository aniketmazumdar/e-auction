/******************************************************************************************
                                        LOG IN
*******************************************************************************************/

// creating variables for all input fields
var txtEmail           =   $('#txtEmail')
var pwdPassword        =   $('#pwdPassword')


// for all fields data validation check
var isValidEmail    =   false;



// txtEmail formate validation check
// txtEmail.change(function() {
//     isValidEmail = emailFormateValidationCheck(txtEmail)
// })



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
                    //alert("Successfully logged in")
                }
                else{
                    alert("Email and password aren't matched")
                }
            },
            error: function(){
                alert("Error occured")
            }
        })
    } else {
        alert("Invalid data entered!")
    }
})



/******************************************************************************************
                                ADMIN WEBPAGE PATH DATABASE
*******************************************************************************************/

// creating variables for all input fields
var txtPathId               =   $('#txtPath-id')
var txtPath                 =   $('#txtPath')

var selPath                 =   $('#selPath')
var txtPageName             =   $('#txtPage-name')
var txtNavTabName           =   $('#txtNav-tab-name')

var selRenderStatus         =   $('#selRender-status')

var isValidPath             =   false
var isValidRenderStatus     =   false



// txtPath change
txtPath.change(function() { //alert("hello")
    $.ajax({
        url : '/e-auction/site/script/validate-data-script.php',
        type : 'POST',
        data : {
            table               :   "WEBPAGE_PATH_MASTER",
            attribute           :   "WEBPAGE_PATH",
            selectedAttribute   :   "WEBPAGE_PATH",
            selectedData        :   txtPath.val()
        },
        success : function(response) {
            var resData = $.parseJSON(response)
            alert(resData)
            if (resData) {     // path doesn't exist
                isValidPath = true
                alert("path is valid!")
            } else {     // pathId exists
                alert("path already exists!")
                isValidPath = false
            }
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) {
            alert("Status: " + textStatus+" Error: " + errorThrown)
        }
    })
})



// txtpath change and validation check
// btnPath.click(function() {
//     if(txtPath.val() && selRenderStatus.val()){     // if field is not empty
//         $.ajax({
//             url : '/e-auction/site/script/validate_pathId_script.php',
//             type : 'POST',
//             data : {
//                 pathId : txtPath.val()
//             },
//             success : function(response) {
//                 var resData = $.parseJSON(response)
//                 //alert(resData)
//                 if (resData) {     // pathId doesn't exist
//                     isValidPathId = true
//                     //alert("path-id valid!")
//                 } else {     // pathId exists
//                     alert("path-id already exists!")
//                     isValidPathId = false
//                 }
//             },
//             error : function(XMLHttpRequest, textStatus, errorThrown) {
//                 alert("Status: " + textStatus+" Error: " + errorThrown)
//             }
//         })
//     }
//     else {
//         alert("All fields aren't filled up")
//         isValidPathId = false
//     }
// })








/***********************************    END    ********************************************/





/*-----------------------------------------------------------------------------------------
                                ALL FUNCTIONS DEFINITION
 -----------------------------------------------------------------------------------------*/





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



function resetField(inputField) {
	/* Hide the cross icon */
	inputField.siblings(".glyphicon-remove").addClass("hidden")
	/* Hide the check icon */
	inputField.siblings(".glyphicon-ok").addClass("hidden")
	/* Hide the message text */
	inputField.siblings(".error-msg").addClass("hidden")
	/* Disable the field */
	inputField.prop("disabled", true)
}



function setFieldValid(inputField) {
	/* Hide the cross icon */
	inputField.siblings(".glyphicon-remove").addClass("hidden")
	/* Show the check icon */
	inputField.siblings(".glyphicon-ok").removeClass("hidden")
	/* Hide the message text */
	inputField.siblings(".error-msg").addClass("hidden")
}

function setFieldInvalid(inputField, errorMsg) {
	/* Hide the check icon */
	inputField.siblings(".glyphicon-ok").addClass("hidden")
	/* Show the cross icon */
	inputField.siblings(".glyphicon-remove").removeClass("hidden")
	/* Show the message text */
	if (errorMsg) {
		inputField.siblings(".error-msg").html(
				"<strong>" + errorMsg + "</strong>")
        alert(errorMsg)
	}
	inputField.siblings(".error-msg").removeClass("hidden")
}
