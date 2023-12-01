window.onload = function date() {
    let fecha = new Date();

    let dia = document.getElementById("dia");
    let hora = document.getElementById("hora");

    let horas = 0, minutos = 0;

    dia.innerHTML = "Hoy es ";

    switch (fecha.getDay()) {
        case 0:
            dia.innerHTML += "Domingo, ";
            break;
        case 1:
            dia.innerHTML += "Lunes, ";
            break;
        case 2:
            dia.innerHTML += "Martes, ";
            break;
        case 3:
            dia.innerHTML += "Miércoles, ";
            break;
        case 4:
            dia.innerHTML += "Jueves, ";
            break;
        case 5:
            dia.innerHTML += "Viernes, ";
            break;
        case 6:
            dia.innerHTML += "Sábado, ";
            break;
        default:
            alert("Ha surgido un error.");
            break;
    }

    dia.innerHTML += fecha.getDate() + " de ";

    switch (fecha.getMonth()) {
        case 0:
            dia.innerHTML += "Enero";
            break;
        case 1:
            dia.innerHTML += "Febrero";
            break;
        case 2:
            dia.innerHTML += "Marzo";
            break;
        case 3:
            dia.innerHTML += "Abril";
            break;
        case 4:
            dia.innerHTML += "Mayo";
            break;
        case 5:
            dia.innerHTML += "Junio";
            break;
        case 6:
            dia.innerHTML += "Julio";
            break;
        case 7:
            dia.innerHTML += "Agosto";
            break;
        case 8:
            dia.innerHTML += "Septiembre";
            break;
        case 9:
            dia.innerHTML += "Octubre";
            break;
        case 10:
            dia.innerHTML += "Noviembre";
            break;
        case 11:
            dia.innerHTML += "Diciembre";
            break;
        default:
            alert("Ha surgido un error");
            break;
    }

    dia.innerHTML += " de " + fecha.getFullYear();

    if (fecha.getHours() < 10) {
        horas = "0" + fecha.getHours();
    } else {
        horas = fecha.getHours();
    }

    if (fecha.getMinutes() < 10) {
        minutos = "0" + fecha.getMinutes();
    } else {
        minutos = fecha.getMinutes();
    }

    hora.innerHTML = "Son las " + horas + ":" + minutos;
}