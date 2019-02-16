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
    <title>Затраты на транспорт</title>
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
    <p class="result">
    <h5>Результат</h5>
    <p id="resultMsg">

    </p>
    </p>

    <form>
        <div class="form-group col-lg-3 col-md-12 p-0">
            <label for="subwayInput">Число поездок на метро:</label>
            <input id="subwayInput" type="number" class="form-control" value="0" min="0" required>
            <small id="subwayInput" class="text-danger"></small>
        </div>
        <div class="form-group col-lg-3 col-md-12 p-0">
            <label for="groundInput">Число поездок на НГПТ:</label>
            <input id="groundInput" type="number" class="form-control" value="0" min="0" required>
            <small id="groundInput" class="text-danger"></small>
            <small class="form-text text-muted">* Наземный городской пассажирский транспорт (не частный)</small>

        </div>
        <button id="getSum" type="button" class="btn btn-success">Посчитать</button>
    </form>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="functions.js"></script>
<script>
    $(function () {
        $("#getSum").click(function () {

            $(".result").removeAttr('hidden');

            var subway = $("#subwayInput").val();
            var ground = $("#groundInput").val();

            var hasValidationErrors = false;
            if (subway < 0 || subway == '') {
                $("small#subwayInput").text("Укажите корректные данные о количестве поездок на метро");
                hasValidationErrors = true;
            }else{
                $("small#subwayInput").text("");
            }
            if (ground < 0 || ground == '') {
                $("small#groundInput").text("Укажите корректные данные о количестве поездок на наземно транспорте");
                hasValidationErrors = true;
            }else{
                $("small#groundInput").text("");
            }

            if (!hasValidationErrors) {
                var subwaySum = getSubwaySum(subway);
                var groundSum = getGroundSum(ground);

                var result = getResult(subwaySum, groundSum);
                $("#resultMsg").html(result);
                console.log('Subway sum: ' + subwaySum);
                console.log('Ground sum: ' + groundSum);
                console.log("Sum: " + (subwaySum + groundSum));
            }
        });
    });

</script>
</body>
</html>
