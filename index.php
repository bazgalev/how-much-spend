<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Транспорт</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col pt-3">
            <h3>Сколько я потратил на транспорт в Санкт-Петербурге?</h3>
            <p>По проездному
                <a href="http://www.transportspb.com/podorozhnik/prices/">"Подорожник"</a>
                (Единый электронный билет) <b>за месяц</b>
            </p>
        </div>
    </div>

    <form>
        <div class="form-group col-lg-3 col-md-12 p-0">
            <label for="subwayInput">Число поездок на метро:</label>
            <input id="subwayInput" type="number" class="form-control" value="0" min="0" required>
        </div>
        <div class="form-group col-lg-3 col-md-12 p-0">
            <label for="groundInput">Число поездок на НГПТ:</label>
            <input id="groundInput" type="number" class="form-control" value="0" min="0" required>
            <small class="form-text text-muted">* Наземный городской пассажирский транспорт</small>
        </div>
        <button id="getSum" type="button" class="btn btn-primary">Посчитать</button>
    </form>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    $("#getSum").click(function () {
        var subway = $("#subwayInput").val();
        var ground = $("#groundInput").val();

        $.ajax({
            method: "POST",
            url: "ajaxHandler.php",
            data: {subway: subway, ground: ground},
        })
            .done(function (response) {
                $("form").html(response);

            });
    });
</script>
</body>
</html>
