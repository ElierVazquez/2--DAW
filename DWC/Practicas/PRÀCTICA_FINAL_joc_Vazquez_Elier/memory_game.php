<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Jogo</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="js/funciones.js"></script>
</head>
<body>
    <div>
        <?php
            echo $_POST['nickname'];
        ?>
    </div>
    <div id="juego">
        <table>
            <tr>
                <td class="card-box"><img src="img/01c.png" alt="Card" id="0-0c" class="carta delante"><img src="img/card_back.png" alt="Unselected card" data-card-id="0-0" id="0-0" class="carta detras"></td>
                <td><img src="img/card_back.png" alt="Unselected card" data-card-id="1-0" id="1-0" class="carta"></td>
                <td><img src="img/card_back.png" alt="Unselected card" data-card-id="2-0" id="2-0" class="carta"></td>
                <td><img src="img/card_back.png" alt="Unselected card" data-card-id="3-0" id="3-0" class="carta"></td>
                <td><img src="img/card_back.png" alt="Unselected card" data-card-id="4-0" id="4-0" class="carta"></td>
                <td><img src="img/card_back.png" alt="Unselected card" data-card-id="5-0" id="5-0" class="carta"></td>
            </tr>
            <tr>
                <td><img src="img/card_back.png" alt="Unselected card" data-card-id="0-1" id="0-1" class="carta"></td>
                <td><img src="img/card_back.png" alt="Unselected card" data-card-id="1-1" id="1-1" class="carta"></td>
                <td><img src="img/card_back.png" alt="Unselected card" data-card-id="2-1" id="2-1" class="carta"></td>
                <td><img src="img/card_back.png" alt="Unselected card" data-card-id="3-1" id="3-1" class="carta"></td>
                <td><img src="img/card_back.png" alt="Unselected card" data-card-id="4-1" id="4-1" class="carta"></td>
                <td><img src="img/card_back.png" alt="Unselected card" data-card-id="5-1" id="5-1" class="carta"></td>
            </tr>
            <tr>
                <td><img src="img/card_back.png" alt="Unselected card" data-card-id="0-2" id="0-2" class="carta"></td>
                <td><img src="img/card_back.png" alt="Unselected card" data-card-id="1-2" id="1-2" class="carta"></td>
                <td><img src="img/card_back.png" alt="Unselected card" data-card-id="2-2" id="2-2" class="carta"></td>
                <td><img src="img/card_back.png" alt="Unselected card" data-card-id="3-2" id="3-2" class="carta"></td>
                <td><img src="img/card_back.png" alt="Unselected card" data-card-id="4-2" id="4-2" class="carta"></td>
                <td><img src="img/card_back.png" alt="Unselected card" data-card-id="5-2" id="5-2" class="carta"></td>
            </tr>
            <tr>
                <td><img src="img/card_back.png" alt="Unselected card" data-card-id="0-3" id="0-3" class="carta"></td>
                <td><img src="img/card_back.png" alt="Unselected card" data-card-id="1-3" id="1-3" class="carta"></td>
                <td><img src="img/card_back.png" alt="Unselected card" data-card-id="2-3" id="2-3" class="carta"></td>
                <td><img src="img/card_back.png" alt="Unselected card" data-card-id="3-3" id="3-3" class="carta"></td>
                <td><img src="img/card_back.png" alt="Unselected card" data-card-id="4-3" id="4-3" class="carta"></td>
                <td><img src="img/card_back.png" alt="Unselected card" data-card-id="5-3" id="5-3" class="carta"></td>
            </tr>
        </table>
    </div>
</body>
</html>