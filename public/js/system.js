/**
 * Created by workstation on 16.03.17.
 */
var myuser;
$("main").load("pages/login.php");

function login(elem){
    $.ajax({
        method: "POST",
        url: "../api.php?p=login",
        data: {username: $(elem).find(".username").val(), password: $(elem).find(".password").val()}
    })
    .done(function (response) {
        console.log(response);
        res = $.parseJSON(response);
        console.log(res);
        if(response == 0){
            $("main").load("pages/login.php");
            return false;
        }

        $("main").load("pages/tasks.php");
        read();
    });
}

function checkSession() {
    $.ajax({
        method: "POST",
        url: "../api.php?p=check_session",
    })
    .done(function (response) {

        response = $.parseJSON(response);

        if(response == 0){
            $.get("pages/login.php", function (data) {
                $("main").html($(data));
            });
        }else{
            $.get("pages/tasks.php", function (data) {
                $("main").html($(data));
                read();
            });
        }
    });
}

$(document).ready(function () {

    checkSession();

});