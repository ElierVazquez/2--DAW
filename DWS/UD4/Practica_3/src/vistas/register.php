<?php

require("../infraestructura/users_DataAccess.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $u = new Users_DataAccess();
    $u->toInsert($_POST['username'], $_POST['email'], $_POST['user_psw']);

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
    <script src="../../js/psw_button.js"></script>
</head>
<body id="special_body">
    <header>
        <img src="../../img/gear.png" alt="Config" onclick="rotate()" id="config" class="">
        <h1>Chess</h1>
        <nav id="buttons">
            <a href="index.php"><button>Main page</button></a>
        </nav>
    </header>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="register_form">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="register_form">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="register_form">

        <label for="user_psw">Password</label>
        <input type="password" name="user_psw" id="user_psw" class="register_form">

        <img src="../../img/show.svg" alt="Show/hide password" id="psw_button" onclick="show()">

        <input type="submit" value="Register" id="form_button">
    </form>
    <footer>
        <a href="privacyPolicies.php" id="link_policies">Privacy policy</a>
    </footer>
</body>
</html>