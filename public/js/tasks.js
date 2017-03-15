/**
 * Created by workstation on 10.03.17.
 */

var ulColl = $("ul.collection");
var message = $("input#title")


function appendItem(response) {
    for (var i = 0; i < response.length; i++) {

        ulColl.append(
            '<li class="collection-item valign-wrapper">' +
            '<i class="z-depth-1 small material-icons left teal-text" data-action="complete" data-id="' + response[i].task_id + '">done</i> ' +
            '<strong class="left-align valign left col s10 light" style="">' + response[i].task_title + '</strong> ' +
            '<i class="small z-depth-1 red-text text-darken-3 right material-icons" data-action="delete" data-id="' + response[i].task_id + '">delete</i></li>'
        )

    }
}

function create(message) {
    $.ajax({
        method: "GET",
        url: "../api.php?p=task&action=create",
        data: {message: message}
    })
    .done(function (response) {
        read();
    });
}

function read() {
    $.ajax({
        method: "GET",
        url: "../api.php?p=task&action=read"
    })
    .done(function (response) {
        ulColl.empty();
        appendItem($.parseJSON(response));

    });
}

function completeTask(id) {
    $.ajax({
        method: "GET",
        url: "../api.php?p=task&action=complete",
        data: {id: id}
    })
    .done(function (response) {
        read();
    });
}

function deleteTask(id) {
    $.ajax({
        method: "GET",
        url: "../api.php?p=task&action=delete",
        data: {id: id}
    })
        .done(function (response) {
            read();
        });
}

$(document).ready(function () {

    read();

    $("body").on("click", "i", function () {
        switch ($(this).attr("data-action")){
            case "complete":
                completeTask($(this).attr("data-id"));
                break;

            case "delete":
                deleteTask($(this).attr("data-id"));
                break;
        }
    });


    $("#taskForm").submit(function(e){
        e.preventDefault();
        create(message.val());
        message.val("");
    })


});