window.onload = function bolasRand() {
    let minRang = 10102;
    let randCant = Math.floor(Math.random()*11) + 5;
    let res = "";
    let res2 = "";

    for (cont = 0; cont < randCant; cont++) {
        let rand = "&#" + (Math.floor(Math.random()*10) + minRang) + ";";
        
        if (!res.includes(rand)) {
            res2 += rand;
        }
        
        res += rand;
    }
    
    document.write(res);
    document.write("<br>");
    document.write(res2);
}