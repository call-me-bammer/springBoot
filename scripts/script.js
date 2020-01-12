$(document).ready(function() {

    $("#btnSendCode").click(function() {

        var email = $("#email").val();
        // if nothing, 
        if (!email) {
            // add html contents
            $("#confirmStatus").html("Invalid Email format:X");
            // set frame's color to red
            $("#statusFrame").removeClass("getGrey");
            $("#statusFrame").addClass("getRed");
        } else {
            $("#email").attr('disabled', '');
            $("#btnSendCode").attr('disabled', '');
            $("#confirmStatus").html("Go your email '" + email + "' and get authentication numbers:)");
            // set frame's color to grey
            $("#statusFrame").removeClass("getRed");
            $("#statusFrame").addClass("getGrey");
        }
        $("#statusFrame").slideToggle("slow");
        $("#statusFrame").delay(5000).fadeOut(1500);
    });

    $("#btnCheckCode").click(function() {

        if(!$("#email").val()) {
            $("#confirmStatus").html("Invalid Email format:X");
            // set frame's color to red
            $("#statusFrame").removeClass("getGrey");
            $("#statusFrame").addClass("getRed");
        } else {
            $("#confirmCode").attr('disabled', '');
            $("#btnCheckCode").attr('disabled', '');
            $("#confirmStatus").html("In Veryfying...:)");
            // set frame's color to grey
            $("#statusFrame").removeClass("getRed");
            $("#statusFrame").addClass("getGrey");
        }
        $("#statusFrame").slideToggle("slow");
        $("#statusFrame").delay(5000).fadeOut(3000);
    });
});