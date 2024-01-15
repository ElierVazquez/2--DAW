<?php
    session_start();

    if (!isset($_SESSION['name']))
    {
        header("Location: index.php");
    }
?>
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
            <a href="index.php"><button>Main page</button></a>
            <a href="gameListView.php"><button>Game list</button></a>
        </nav>
    </header>
    <?php
        require("../negocio/players_Rules.php");
        $playersBL = new Players_Rules();
        $playersInfo = $playersBL->toGet();
    ?>
    <form action="chessView.php" method="post" id="form">
        <label for="whitePlayer">White player</label>
        <select name="whitePlayer" id="whitePlayer">
            <?php
                foreach ($playersInfo as $player)
                {
                    echo "<option value=\"{$player->getID()}\">{$player->getName()}</option>";
                }
            ?>
        </select> <br>
        <label for="blackPlayer">Black player</label>
        <select name="blackPlayer" id="blackPlayer">
            <?php
                foreach ($playersInfo as $player)
                {
                    echo "<option value=\"{$player->getID()}\">{$player->getName()}</option>";
                }
            ?>
        </select> <br> <br>
        <label for="title">Title of the game</label>
        <input type="text" name="title" id="title"> <br> <br>
        <input type="submit" value="Submit" id="submit_button">
    </form>
    <footer>
        <a href="privacyPolicies.php" id="link_policies">Privacy policy</a>
    </footer>
</body>
</html>