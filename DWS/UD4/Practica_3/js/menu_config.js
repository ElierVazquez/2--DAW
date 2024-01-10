function rotate()
{
    let src = document.getElementById("config");

    src.setAttribute("class", "rotate");
    src.setAttribute("onclick", "rotateInv()");
}

function rotateInv()
{
    let src = document.getElementById("config");

    src.removeAttribute("class");
    src.setAttribute("onclick", "rotate()")
}