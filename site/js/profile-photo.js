/******************************************************************************************
                                    PROFILE PHOTO
*******************************************************************************************/
$(document).ready(function(){
/* ---------------------------------- script start ------------------------------------ */

    // fetch profilephoto when load the page
    profilePhotoFetch();

    // profilephoto upload
    $("#frmProfilePhoto").on('submit',(function(e) {
        if($('#filPhoto').val()){
            e.preventDefault();
            $.ajax({
                url: "/e-auction/site/script/photo-uploading-script.php",
                type: "POST",
                data:  new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {
                    if(response){
                        alert(response);
                        profilePhotoFetch();
                    }
                },
                error: function(){
                    alert("Error occured");
                }
            });
        }
        else{
            alert("No file is selected!")
        }
    }));

    /*--------------------------------------------------------------------------------------
                                        called functions
    ----------------------------------------------------------------------------------------*/

    // profile photo fetch
    function profilePhotoFetch(){
        $.ajax({
            url: '/e-auction/site/script/profilephoto-fetching-script.php',
            type: 'GET',
            success: function(response) {
                var resData = $.parseJSON(response);
                document.getElementById("img-profile-photo").src = resData;
                //alert(response);
            },
        });
    }

/* -------------------------------------- script end ------------------------------------ */
});
