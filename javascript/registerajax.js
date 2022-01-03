$(document).ready(function(){
    $("#register").click(function(event){
        event.preventDefault();
        var regdata = $("#form");
        // var regdata = {
        //     name: $("#name").val(),
        //     email: $("#email").val(),
        //     phone: $("#phone").val(),
        //     password: $("#password").val(),
        //     confirmpassword: $("#confirmpassword").val()
        // }
        $.ajax({
            url: 'phpscripts/insert.php',
            type: 'POST',
            contentType: 'application/x-www-form-urlencoded',
            dataTye: 'html',
            data: regdata.serialize(),
            success: function(data) {
                if(data == "Please fill all the fields" && data == "Password does not match") {
                    $("#display").html(data);
                } else {
                    window.location.href = "../loginlogout/login.php";
                }
            }
        });
    });
});