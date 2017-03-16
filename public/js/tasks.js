/**
 * Created by workstation on 10.03.17.
 */



function appendItem(response) {
    for (var i = 0; i < response.length; i++) {

        $(document).find("ul.collection").append(
            '<li class="collection-item valign-wrapper">' +
            '<i class="small material-icons left teal-text" data-action="complete" data-id="' + response[i].task_id + '">done</i> ' +
            '<strong class="left-align valign left col s10 light" style="">' + response[i].task_title + '</strong> ' +
            '<i class="small red-text text-darken-3 right material-icons" data-action="delete" data-id="' + response[i].task_id + '">delete</i></li>'
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
        console.log(response);
        read();
    });
}

function read() {
    $.ajax({
        method: "GET",
        url: "../api.php?p=task&action=read"
    })
    .done(function (response) {
        $(document).find("ul.collection").empty();
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

    $(document).on("submit", "#taskForm", function (e) {
        e.preventDefault();
        create($(this).find("input#title").val());
        $(this).find("input#title").val("");
    })



});