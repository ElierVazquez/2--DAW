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
            <a href="new_gameView.php"><button>New Game</button></a>
            <a href="index.php"><button>Main page</button></a>
        </nav>
    </header>
    <div id="list">
        <?php
            require("../negocio/matches_Rules.php");
            $matchesBL = new Matches_Rules();
            $matches = $matchesBL->toGet();
        ?>
        <table>
            <thead>
                <tr>
                    <th class="boxes">ID</th>
                    <th class="boxes">Description</th>
                    <th class="boxes">Start date</th>
                    <th class="boxes">Start hour</th>
                    <th class="boxes">State</th>
                    <th class="boxes">Winner</th>
                    <th class="boxes">End date</th>
                    <th class="boxes">End hour</th>
                    <th class="boxes">White pieces</th>
                    <th class="boxes">Black pieces</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($matches as $match)
                    {
                        echo "<tr><td class=\"boxes\">{$match->getID()}</td><td class=\"boxes\"><a href=\"boardView.php?game_id={$match->getID()}\">{$match->getTitle()}</a></td><td class=\"boxes\">{$match->getStartDate()}</td><td class=\"boxes\">{$match->getStartHour()}</td><td class=\"boxes\">{$match->getState()}</td><td class=\"boxes\">{$match->getWinner()}</td><td class=\"boxes\">{$match->getEndDate()}</td><td class=\"boxes\">{$match->getEndHour()}</td><td class=\"boxes\">{$match->getWhite()}</td><td class=\"boxes\">{$match->getBlack()}</td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
    <footer>
        <a href="privacyPolicies.php" id="link_policies">Privacy policy</a>
    </footer>
</body>
</html>