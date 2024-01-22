
    let srcActivar = document.getElementById("btnActivar");
    let srcNegra = document.getElementById("btnNegra");
    let srcItalica = document.getElementById("btnItalica");
    let srcColor = document.getElementById("btnColor");
    let res = document.getElementById("res");

    let negra = 0;
    let italica = 0;
    let color = 0;

    srcNegra.addEventListener("click", function() {
        if (negra == 0) {
            negra = 1;
        } else {
            negra = 0;
        }
    });

    srcItalica.addEventListener("click", function() {
        if (italica == 0) {
            italica = 1;
        } else {
            italica = 0;
        }
    });

    srcColor.addEventListener("click", function() {
        if (color == 0) {
            color = 1;
        } else {
            color = 0;
        }
    });

    srcActivar.addEventListener("click", function() {
        if (negra == 1) {
            res.style.fontWeight = "bold";
        } else {
            res.style.fontWeight = "normal";
        }

        if (italica == 1) {
            res.style.fontStyle = "italic";
        } else {
            res.style.fontStyle = "normal";
        }

        if (color == 1) {
            res.style.color = "purple";
        } else {
            res.style.color = "black";
        }
    });