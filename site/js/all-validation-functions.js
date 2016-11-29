//------------------------------------------------------------------------------------------
function emailFormateValidationCheck(inputField){
    var x = inputField.val();
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Invalid email formate");
        return false;
    }
    else{
        return true;
    }
}
//------------------------------------------------------------------------------------------

//------------------------------------------------------------------------------------------
function passwordFormateValidationCheck(inputField) {
    var frmt = /^\S*(?=\S{5,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*/;
    var resVal = frmt.test(inputField.val());
    if (resVal){
        //alert("Correct password formate!");
        return true;
    }
    else{
        alert("Incorrect password formate!");
        return false;
    }
    /*
        Explaining $\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$
        / = beginning of string
        \S* = any set of characters
        (?=\S{8,}) = of at least length 8
        (?=\S*[a-z]) = containing at least one lowercase letter
        (?=\S*[A-Z]) = and at least one uppercase letter
        (?=\S*[\d]) = and at least one number
        (?=\S*[\W]) = and at least a special character (non-word characters)
        / = end of the string
    */
}
//------------------------------------------------------------------------------------------

//------------------------------------------------------------------------------------------
function passwordMatchCheck(inputField1, inputField2) {
    if (inputField1.val() == inputField2.val()) {
        return true;
    }
    else {
        alert("mismatched");
        return false;
    }
}
//------------------------------------------------------------------------------------------

//------------------------------------------------------------------------------------------
function phoneNumberValidationCheck(inputField){
    var isNonNumericCharExist = inputField.val().match(/[^\d]/);

    if (!isNonNumericCharExist) {
        if(inputField.val().length == 10)
            return true;
    }

    alert("Incorrect phone number!");
    return false;
}
//------------------------------------------------------------------------------------------

//------------------------------------------------------------------------------------------
function faxNumberValidationCheck(inputField){
    var isNonNumericCharExist = inputField.val().match(/[^\d]/);

    if (!isNonNumericCharExist) {
        if(inputField.val().length == 10)
            return true;
    }

    alert("Incorrect fax number!");
    return false;
}
//------------------------------------------------------------------------------------------

//------------------------------------------------------------------------------------------
function zipValidationCheck(inputField){
    var isNonNumericCharExist = inputField.val().match(/[^\d]/);

    if (!isNonNumericCharExist) {
        if(inputField.val().length > 3 && inputField.val().length < 7)
            return true;
    }

    alert("Incorrect zip code!");
    return false;
}
//------------------------------------------------------------------------------------------

//------------------------------------------------------------------------------------------

//------------------------------------------------------------------------------------------
