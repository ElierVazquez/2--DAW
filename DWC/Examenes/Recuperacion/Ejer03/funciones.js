function start() {
    let seg = document.getElementById("seg").value;
    let timePrint = document.getElementById("res_time");
    let timeup = document.getElementById("res_timeup");

    timePrint.innerHTML = seg;

    intervalo = setInterval(function () {
        if (timePrint.innerHTML > 0) {
            timePrint.innerHTML = timePrint.innerHTML - 0.5;
        } else {
            timeup.innerHTML = "Time up";
        }
    }, 500);
}

function stop() {
    clearInterval(intervalo);

    document.getElementById("res_timeup").innerHTML = "Detenido antes de 0, tiempo restante " + document.getElementById("res_time").innerHTML;
}