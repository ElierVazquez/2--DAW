class NIF {

    constructor(num, letra) {

        this.num = num;
        this.letra = letra;

    }

    esCorrecto(num, letra) {

        if (num < 7 || num > 7) {
            return false;
        }

        let letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];

        let calc = num % 23;

        if (calc < 0 || calc > 22) {

            return false;

        }

        return true;

    }

}