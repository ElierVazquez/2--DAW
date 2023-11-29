class NIF {
    num;
    letra;

    constructor(num, letra) {

        this.num = num;
        this.letra = letra;

    }

    esCorrecto() {

        let num = this.num;
        let letra = this.letra;

        let letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];

        letra = letras[num%23];

        if (num.length == 8 && letra == this.letra) {
            return true;
        } else {
            return false;
        }

    }

}

let nif1 = new NIF("02255667", "B");
let nif2 = new NIF("01489562", "J");
let nif3 = new NIF("01156987", "A");
let nif4 = new NIF("03569874", "P");

document.getElementById("res1").innerHTML = nif1.esCorrecto();
document.getElementById("res2").innerHTML = nif2.esCorrecto();
document.getElementById("res3").innerHTML = nif3.esCorrecto();
document.getElementById("res4").innerHTML = nif4.esCorrecto();