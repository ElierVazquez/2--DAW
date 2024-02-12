$(document).ready(function() {
    let selected1 = null;
    let selected2 = null;
    $(".carta").click(function() {
        let clickedCard = $(this).data("card-id");
        let card1;
        let card2;

        if (selected1 == null) {
            selected1 = clickedCard;
            console.log("1 " + selected1);

            card1 = document.getElementById(selected1);
            card1.setAttribute("class", "carta selected");
        } else if (selected1 != null) {
            selected2 = clickedCard;
            console.log("2 " + selected2);
            if (ovejas(selected1, selected2)) {
                console.log("opa gamnam style");
            }

            card1 = document.getElementById(selected1);
            card1.setAttribute("class", "carta");

            intervalo = setInterval(half_trisicsti, 1000, selected1, selected2);

            card1 = document.getElementById(selected1);
            card1.setAttribute("class", "carta");
            card2 = document.getElementById(selected2);
            card2.setAttribute("class", "carta");

            selected1 = null;
        }

        
    });
});

function half_trisicsti(selected1, selected2) {
    let card1 = document.getElementById(selected1);
    let card2 = document.getElementById(selected2);

    card1.setAttribute("class", "carta rotate_phase1");
    card2.setAttribute("class", "carta rotate_phase1");
}

function ovejas(blancas, negras) {
    if (blancas == negras) {
        return true;
    }

    return false;
}