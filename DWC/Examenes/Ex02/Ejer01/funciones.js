let psswdContent = document.getElementById("psswd").value;
let rpsswdContent = document.getElementById("rpsswd").value;
let psswd = document.getElementById("psswd");
let rpsswd = document.getElementById("rpsswd");
let res_psswd = document.getElementById("res_psswd");

function check_psswd(psswdContent, rpsswdContent, res_psswd) {
    if (psswdContent == rpsswdContent) {
        res_psswd.innerHTML = "Las contraseñas coinciden";
    } else {
        res_psswd.innerHTML = "Las contraseñas no coinciden";
    }
}

psswdContent.addEventListener("change", check_psswd(psswdContent, rpsswdContent, res_psswd));
rpsswdContent.addEventListener("change", check_psswd(psswdContent, rpsswdContent, res_psswd));

function redes_sociales_on() {
    let tick = document.getElementById("redes");
    let options = document.getElementById("redes_sociales");

    options.removeAttribute("style");

    tick.setAttribute("onclick", "redes_sociales_off()");
}

function redes_sociales_off() {
    let tick = document.getElementById("redes");
    let options = document.getElementById("redes_sociales");

    options.setAttribute("style", "display: none;");

    tick.setAttribute("onclick", "redes_sociales_on()");
}

document.getElementById("info").innerHTML = navigator.userAgent;