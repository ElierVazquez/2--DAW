let array = {};

for (cont = 0; cont < 15; cont++) {
    array[cont] = Math.floor(Math.random()*10+1);
}

for (cont = 0; cont < 15; cont++) {
    for (cont2 = 0; cont2 < array[cont]; cont2++) {
        document.write("*");
    }
    document.writeln("<br>");
}