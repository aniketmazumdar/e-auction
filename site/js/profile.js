/******************************************************************************************
                                        PROFILE
*******************************************************************************************/
$(document).ready(function(){
/* ---------------------------------- script start ------------------------------------ */

    // at the time of loading page\
    $("#div-mailing-address").show();
    $("#div-contact-address").hide();


    // show/hide two panel body by clicking button
    $('#btn-mailing-address').click(function() {
        $("#div-mailing-address").show();
        $("#div-contact-address").hide();
    });

    $('#btn-contact-address').click(function() {
        $("#div-mailing-address").hide();
        $("#div-contact-address").show();
    });

/* -------------------------------------- script end ------------------------------------ */
});
