function abrir_menu() {
    let btn = document.getElementById("boton_lateral");
    let menu = document.getElementById("menu_lateral");

    menu.removeAttribute("class");
    btn.setAttribute("onclick", "cerrar_menu()");
}

function cerrar_menu() {
    let btn = document.getElementById("boton_lateral");
    let menu = document.getElementById("menu_lateral");

    menu.setAttribute("class", "hide");
    btn.setAttribute("onclick", "abrir_menu()");
}