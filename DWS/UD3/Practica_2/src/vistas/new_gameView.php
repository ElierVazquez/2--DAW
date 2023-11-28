<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chess</title>
    <link rel="stylesheet" href="../../css/chess_game_styles.css">
    <script src="../../js/menu_config.js"></script>
</head>
<body>
    <header>
        <img src="../../img/gear.png" alt="Config" onclick="rotate()" id="config" class="">
        <h1>Chess</h1>
        <nav id="buttons">
            <button onclick="">New Game</button>
            <button onclick="">Games</button>
        </nav>
    </header>
    <form action="chessView.php" method="post" id="form">
        <label for="whitePlayer">White player</label>
        <select name="whitePlayer" id="whitePlayer"></select> <br>
        <label for="blackPlayer">Black player</label>
        <select name="blackPlayer" id="blackPlayer"></select> <br> <br>
        <label for="title">Title of the game</label>
        <input type="text" name="title" id="title"> <br> <br>
        <input type="submit" value="Submit" id="submit_button">
    </form>
    <footer>
        <a href="privacyPolicies.php" id="link_policies">Privacy policy</a>
    </footer>
</body>
</html>