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
        <img src="../../img/user.png" alt="User management" id="users">
        <h1>Chess</h1>
        <nav id="buttons">
            <a href="new_gameView.php"><button>New Game</button></a>
            <a href="gameListView.php"><button>Game list</button></a>
        </nav>
        <nav id="user_management">
            <nav>
                <img src="../../img/login.png" alt="Login" id="login">
            </nav>
            <nav>
                <img src="../../img/register.png" alt="Register" id="register">
            </nav>
            <hr>
            <nav>
                <img src="../../img/logout.png" alt="Logout" id="logout">
            </nav>
        </nav>
    </header>

    <footer>
        <a href="privacyPolicies.php" id="link_policies">Privacy policy</a>
    </footer>
</body>
</html>