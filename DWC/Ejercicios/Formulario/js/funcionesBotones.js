function comprobarContraseña() {

}

function mostrarBasicos() {
    let src = document.getElementsByClassName("basico");
    let res = document.getElementById("datosBasicos");

    let otherRes1 = document.getElementById("datosAcademicos");
    let otherRes2 = document.getElementById("datosContacto");
    let otherRes3 = document.getElementById("datosOtros");
    otherRes1.innerHTML = "";
    otherRes2.innerHTML = "";
    otherRes3.innerHTML = "";

    res.innerHTML = "";

    for (let i = 0; i < src.length; i++) {
        res.innerHTML += src[i].value + "<br>";
    }
}

function mostrarAcademicos() {
    let src = document.getElementsByClassName("academico");
    let res = document.getElementById("datosAcademicos");

    let otherRes1 = document.getElementById("datosBasicos");
    let otherRes2 = document.getElementById("datosContacto");
    let otherRes3 = document.getElementById("datosOtros");
    otherRes1.innerHTML = "";
    otherRes2.innerHTML = "";
    otherRes3.innerHTML = "";

    res.innerHTML = "";

    for (let i = 0; i < src.length; i++) {
        if (src[i].checked) {
            res.innerHTML += src[i].value + "<br>";
        }
    }
}

function mostrarContacto() {
    let src = document.getElementsByClassName("contacto");
    let res = document.getElementById("datosContacto");

    let otherRes1 = document.getElementById("datosBasicos");
    let otherRes2 = document.getElementById("datosAcademicos");
    let otherRes3 = document.getElementById("datosOtros");
    otherRes1.innerHTML = "";
    otherRes2.innerHTML = "";
    otherRes3.innerHTML = "";

    res.innerHTML = "";

    for (let i = 0; i < src.length; i++) {
        res.innerHTML += src[i].value + "<br>";
    }
}

function mostrarOtros() {
    let src = document.getElementsByClassName("otros");
    let res = document.getElementById("datosOtros");

    let otherRes1 = document.getElementById("datosBasicos");
    let otherRes2 = document.getElementById("datosAcademicos");
    let otherRes3 = document.getElementById("datosContacto");
    otherRes1.innerHTML = "";
    otherRes2.innerHTML = "";
    otherRes3.innerHTML = "";

    res.innerHTML = "";

    for (let i = 0; i < src.length; i++) {
        res.innerHTML += src[i].value + "<br>";
    }
}