$('#submitButton').on('click', function (e) {

    e.preventDefault();
    
    var bool = true;
    
    bool = bool && $("#username")[0].checkValidity()
        && ($("#username").val().length > 0);
    bool = bool && $("#password")[0].checkValidity()
        && ($("#password").val().length > 0);
    
    if (bool) {
        var user = {
            username: $("#username").val(),
            password: $("#password").val()
        }
        const userXHR= $.ajax({
            url    : "../php/loginconnect.php",
            type   : "POST",
            data   : user,
            
           
            
        }).done(function(datas) {
            if (datas == "user") {
              window.location.href = "../php/har-upload55.php";
            }
            else if (datas == "admin") {
                window.location.href = "../php/admin-stats.php";

            }
            else {
               
                $('#wrongInput').css("display", "block !important");

            }
        }).fail(function() {
            $('#failureModal').modal('show');//φτιαχτω μετα

        });
    }

    else {
        $('#wrongInput').css("display", "block");

    }

});