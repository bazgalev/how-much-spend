<?php

function renderResponse(int $subway, int $ground)
{
    $subwSum = 0;
    for ($i = 1; $i <= $subway; $i++) {

        if (0 <= $i && $i <= 10) {
            $subwSum += 36;
        }
        if (11 <= $i && $i <= 20) {
            $subwSum += 35;
        }
        if (21 <= $i && $i <= 30) {
            $subwSum += 34;
        }
        if (31 <= $i && $i <= 40) {
            $subwSum += 33;
        }
        if ($i >= 41) {
            $subwSum += 32;
        }
    }

    $groundSum = 0;
    for ($i = 1; $i <= $ground; $i++) {

        if (0 <= $i && $i <= 10) {
            $groundSum += 31;
        }
        if (11 <= $i && $i <= 20) {
            $groundSum += 30;
        }
        if (21 <= $i && $i <= 30) {
            $groundSum += 29;
        }
        if (31 <= $i && $i <= 40) {
            $groundSum += 28;
        }
        if ($i >= 41) {
            $groundSum += 27;
        }
    }
    $resultSum = $subwSum + $groundSum;

    $html = "<p>На метро было потрачено: <b>$subwSum</b>," .
        " на наземный транспорт: <b>$groundSum</b>.<br><b>Итого: </b>$resultSum";

    return $html;
}

echo(renderResponse($_POST['subway'], $_POST['ground']));
