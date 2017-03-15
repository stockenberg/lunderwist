<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="libs/materialize/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Summative 2 5204</title>
</head>
<body>

<div class="row">

    <div class="col offset-s2 offset-l2 offset-m2 s8 m8 l8" id="test1">
        <h3>Lunderwist</h3>
        <br/><br/>
        <form action="" id="taskForm">

            <div class="input-field">
                <input id="title" type="text" class="validate">
                <label class="active" for="title">Todo:</label>
            </div>

        </form>

        <div class="s12">
            <ul class="collection">
                <li class="collection-item valign-wrapper">
                    <i class="small material-icons left teal-text">done</i> <strong class="left-align valign left col s10 light" style="">Hallo</strong> <i class="small red-text text-darken-3 right material-icons">delete</i></li>
            </ul>
        </div>

    </div>

</div>



<ul id="slide-out" class="side-nav">
    <li><div class="userView">
            <div class="background">
                <img src="images/office.jpg">
            </div>
            <a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
            <a href="#!name"><span class="white-text name">John Doe</span></a>
            <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
        </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
</ul>
<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>



<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="libs/materialize/js/materialize.min.js"></script>
<script src="js/tasks.js"></script>
<script>
    $(".button-collapse").sideNav();
</script>
</body>
</html>