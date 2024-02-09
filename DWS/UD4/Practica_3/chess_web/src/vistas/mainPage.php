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
    <script src="../../js/menu_user.js"></script>
</head>
<body>
    <header>
        <img src="../../img/gear.png" alt="Config" onclick="show_config()" id="config" class="">
        <a href="logout.php"><img src="../../img/logout.png" alt="Logout" id="logout"></a>
        <?php
            echo "<p id=\"username_view\">".$_SESSION['name']."</p>";

            if ($_SESSION['premium'] == 1)
            {
                echo "<img id=\"premium_sign\" src=\"../../img/premium.png\" alt=\"premium_sign\">";
            }
        ?>
        <h1>Chess</h1>
        <nav id="buttons">
            <?php
                if ($_SESSION['premium'] == 1)
                {
                    echo "<a href=\"gameListView.php\"><button>Game list</button></a>";
                }
            ?>
            <a href="new_gameView.php"><button>New Game</button></a>
        </nav>
    </header>

    <footer>
        <a href="privacyPolicies.php" id="link_policies">Privacy policy</a>
    </footer>
</body>
</html>