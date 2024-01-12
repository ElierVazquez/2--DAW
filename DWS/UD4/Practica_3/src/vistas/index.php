<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require ("../negocio/userRules.php");

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    $userBL = new User_Rules();
    $acount = $userBL->toVerify($_POST['username'],$_POST['user_psw']);

    if ($acount == $_POST['username'])
    {
        session_start();
        $_SESSION['name'] = $_POST['username'];
        header("Location: mainPage.php");
    }
    else
    {
        $error = true;
    }
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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="login_form">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="login_form">

        <label for="user_psw">Password</label>
        <input type="password" name="user_psw" id="user_psw" class="login_form">

        <img src="../../img/show.svg" alt="Show/hide password" id="psw_button" onclick="show()" class="login_form">

        <input type="submit" value="Login" id="form_button">
    </form>
    <footer>
        <a href="privacyPolicies.php" id="link_policies">Privacy policy</a>
    </footer>
    <?php
        if (isset($error))
        {
            print("<div> You don't have access to the page </div>");
        }
    ?>
</body>
</html>