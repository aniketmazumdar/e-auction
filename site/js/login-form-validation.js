/******************************************************************************************
                                        LOG IN
*******************************************************************************************/

// creating variables for all input fields
var txtEmail           =   $('#txtEmail')
var pwdPassword        =   $('#pwdPassword')

alert("hello")

// txtEmail formate validation check
txtEmail.change(function() {

    emailFormateValidationCheck(txtEmail)
})



function emailFormateValidationCheck(inputField){
    var x = inputField.val()
    var atpos = x.indexOf("@")
    var dotpos = x.lastIndexOf(".")
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Invalid email formate")
        return false
    }
    else{
        return true
    }
}
