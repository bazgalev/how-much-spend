function getSubwaySum(amount) {
    var sum = 0;
    for (var i = 1; i <= amount; i++) {
        if (0 <= i && i <= 10) {
            sum += 36;
        }
        if (11 <= i && i <= 20) {
            sum += 35;
        }
        if (21 <= i && i <= 30) {
            sum += 34;
        }
        if (31 <= i && i <= 40) {
            sum += 33;
        }
        if (i >= 41) {
            sum += 32;
        }
    }
    return sum;
}

function getGroundSum(amount) {
    var sum = 0;
    for (var i = 1; i <= amount; i++) {

        if (0 <= i && i <= 10) {
            sum += 31;
        }
        if (11 <= i && i <= 20) {
            sum += 30;
        }
        if (21 <= i && i <= 30) {
            sum += 29;
        }
        if (31 <= i && i <= 40) {
            sum += 28;
        }
        if (i >= 41) {
            sum += 27;
        }
    }
    return sum;
}

function getResult(subwaySum, groundSum) {
    var msg = "Затраты на метро: " + subwaySum + "<br>";
    msg += "Затраты на назменый транспорт: " + groundSum + "<br>";
    msg += "Итого: " + (subwaySum + groundSum) + "<br>"
    return msg;
}