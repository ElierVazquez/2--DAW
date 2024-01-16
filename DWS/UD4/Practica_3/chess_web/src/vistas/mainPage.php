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
        <img src="../../img/gear.png" alt="Config" onclick="rotate()" id="config" class="">
        <a href="logout.php"><img src="../../img/logout.png" alt="Logout" id="logout"></a>
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
        <nav id="user_management" class="no_display">
            <a href="login.php">
                <nav id="login">
                    <img src="../../img/login.png" alt="Login">
                    <p>Login</p>
                </nav>
            </a>
            <a href="register.php" class="links">
                <nav id="register">
                    <img src="../../img/register.png" alt="Register">
                    <p>Register</p>
                </nav>
            </a>
            <hr>
            <a href="index.php">
                <nav id="logout">
                    <img src="../../img/logout.png" alt="Logout">
                    <p>Logout</p>
                </nav>
            </a>
        </nav>
    </header>

    <footer>
        <a href="privacyPolicies.php" id="link_policies">Privacy policy</a>
    </footer>
</body>
</html>