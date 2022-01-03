$(document).ready(function(){
    $("#login").click(function(event) {
        event.preventDefault();
        var logindata = $("#loginform");
        $.ajax({
            url: 'phpscripts/loginscript.php',
            type: 'POST',
            dataType: 'html',
            contentType: 'application/x-www-form-urlencoded',
            data: logindata.serialize(),
            success: function(data) {
                if(data == "Please fill all the fields" && data == "Password does not match with our database" && data == "Email does not match with our database") {
                    console.log(data); 
                } else {
                    window.location.href = "../loginlogout/welcome.php";
                }
            }
        });
    })
});