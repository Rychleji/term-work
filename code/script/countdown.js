var countDownDate = new Date("Nov 20, 2018 17:30:00").getTime();

var x = setInterval(function () {

    var now = new Date().getTime();
    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("days").innerHTML = checkPrefix(days);
    document.getElementById("hours").innerHTML = checkPrefix(hours);
    document.getElementById("minutes").innerHTML = checkPrefix(minutes);
    document.getElementById("seconds").innerHTML = checkPrefix(seconds);

}, 1000);

function checkPrefix(num) {
    if (num < 10) {
        return "0" + String(num);
    }
    return num;
}