/******************************************************************************************
                                        REGISTRATION
*******************************************************************************************/
$(document).ready(function(){
/* ---------------------------------- script start ------------------------------------ */

    // registration or login page fetch by clicking navtab
    $('#login').click(function(event) {
        $("#div-modal-dialog").load('/e-auction/site/login.php');
    });
    $('#signup').click(function(event) {
        $("#div-modal-dialog").load('/e-auction/site/registration.php');
    });

/* -------------------------------------- script end ------------------------------------ */
});
