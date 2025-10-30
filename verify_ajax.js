$(document).ready(function(){
    $("#submit").click(function(){
        console.log("Button clicked");
        var username = $("input[name='username']").val().trim();
        var messageDiv = $("#messageDiv");

        //clear previous error message (if any)
        messageDiv.text("").removeClass("error verified");

        //check if the username is empty
        if(username === ""){
            messageDiv.addClass("verified").text("Key in username and click submit.");
            return;
        }

        //AJAX request to verify username
        $.ajax({
            url: "info.php",
            type: "POST",
            data: {username: username},
            success: function(response){
                if(response === "Verified"){
                    messageDiv.addClass("verified").text("Verified");
                } else {
                    messageDiv.addClass("error").text("Error");
                }
            }
        });
    });
    })