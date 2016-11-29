
$('#login').click(function(event) {
    $("#div-modal-dialog").load('/e-auction/site/login.html');
});
$('#signup').click(function(event) {
    $("#div-modal-dialog").load('/e-auction/site/registration.html');
});





$("#div-new-path").hide();
$("#div-new-page").hide();


$("#lbl-new-path").click(function(){
    $("#div-new-path").slideToggle("slow");
});
$("#lbl-new-page").click(function(){
    $("#div-new-page").slideToggle("slow");
});
