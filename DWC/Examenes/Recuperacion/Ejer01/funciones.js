document.getElementById("res_monitor").innerHTML = "Está usted usando un monitor que utiliza " + window.screen.colorDepth + " bits para representar cada color";

let isla = document.getElementById("isla");

let opt1 = "";
let opt2 = "";
let opt3 = "";

isla.addEventListener('change', function () {
    var selectedOption = this.options[isla.selectedIndex].value;

    switch(selectedOption) {
        case "mallorca":
            opt1 = "Andratx";
            opt2 = "Palma";
            opt3 = "Pollenca";
            break;
        case "menorca":
            opt1 = "Mao";
            opt2 = "Ciutadella";
            opt3 = "Sant Lluis";
            break;
        case "ibiza":
            opt1 = "Ibiza";
            opt2 = "San Antonio";
            opt3 = "Santa Eulalia";
            break;
        default:
            opt1 = "Isla no seleccionada";
            opt2 = "Isla no seleccionada";
            opt3 = "Isla no seleccionada";
            break;
    }
    
    document.getElementById("mun1").innerHTML = opt1;
    document.getElementById("mun2").innerHTML = opt2;
    document.getElementById("mun3").innerHTML = opt3;
});