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
            <a href="new_gameView.php"><button>New Game</button></a>
            <a href="index.php"><button>Main page</button></a>
            <a href="gameListView.php"><button>Game list</button></a>
        </nav>
    </header>
    <div id="navigate">
        <button id="start" onclick="firstBoard()"><<</button>
        <button id="previous" onclick=""><</button>
        <button id="next" onclick="">></button>
        <button id="end" onclick="finalBoard()">>></button>
    </div>
    <?php
        $id = $_GET["game_id"];

        require("../negocio/boardStatus_Rules.php");
        $boardBL = new BoardStatus_Rules();
        $boardStatusList = $boardBL->toGet($id);

        $turn = 0;

        $board = $boardStatusList[$turn]->getBoard();

        function firstBoard()
        {
            $id = $_GET["game_id"];

            require("../negocio/boardStatus_Rules.php");
            $boardBL = new BoardStatus_Rules();
            $boardStatusList = $boardBL->toGet($id);

            $turn = 0;

            $board = $boardStatusList[$turn]->getBoard();

            

            DrawChessGame($board);
        }

        function finalBoard()
        {
            $id = $_GET["game_id"];

            require("../negocio/boardStatus_Rules.php");
            $boardBL = new BoardStatus_Rules();
            $boardStatusList = $boardBL->toGet($id);

            $turn = count($boardStatusList) - 1;

            $board = $boardStatusList[$turn]->getBoard();

            DrawChessGame($board);
        }
    ?>
    <?php
        function AssembleBoard($game)
        {
            echo "<div id=\"board\">";
            
            for ($row = 0; $row < 8; $row++)
            {
                for ($column = 0; $column < 8; $column++)
                {
                    if (($row + $column) % 2 == 0)
                    {
                        $sectionColor = "White";
                    }
                    else
                    {
                        $sectionColor = "Black";
                    }

                    echo "<div id=\"section$row|$column\" class=\"{$sectionColor} section\">";
                        if ($game[$row][$column] != 0)
                        {
                            echo "<img src=\"../../img/{$game[$row][$column]}.png\" class=\"piece\">";
                        }
                    echo "</div>";
                }
            }

            echo "</div>";
        }

        function AssembleBlackCatches($boardPieces, $contPieces) {
            echo "<div id=\"blackCatches\">";

            for ($i = 0; $i < ($boardPieces["PAWH"] - $contPieces["PAWH"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"../../img/PAWH.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardPieces["ROWH"] - $contPieces["ROWH"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"../../img/ROWH.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardPieces["KNWH"] - $contPieces["KNWH"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"../../img/KNWH.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardPieces["BIWH"] - $contPieces["BIWH"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"../../img/BIWH.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardPieces["QUWH"] - $contPieces["QUWH"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"../../img/QUWH.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardPieces["KIWH"] - $contPieces["KIWH"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"../../img/KIWH.png\">";
                echo "</div>";
            }

            echo "</div>";
        }

        function AssembleWhiteCatches($boardPieces, $contPieces)
        {
            echo "<div id=\"whiteCatches\">";

            for ($i = 0; $i < ($boardPieces["PABL"] - $contPieces["PABL"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"../../img/PABL.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardPieces["ROBL"] - $contPieces["ROBL"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"../../img/ROBL.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardPieces["KNBL"] - $contPieces["KNBL"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"../../img/KNBL.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardPieces["BIBL"] - $contPieces["BIBL"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"../../img/BIBL.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardPieces["QUBL"] - $contPieces["QUBL"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"../../img/QUBL.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardPieces["KIBL"] - $contPieces["KIBL"]); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"../../img/KIBL.png\">";
                echo "</div>";
            }

            echo "</div>";
        }

        function DrawChessGame($board)
        {
            $contPieces = array
            (
                "PABL" => 0,
                "ROBL" => 0,
                "KNBL" => 0,
                "BIBL" => 0,
                "QUBL" => 0,
                "KIBL" => 0,
                "PAWH" => 0,
                "ROWH" => 0,
                "KNWH" => 0,
                "BIWH" => 0,
                "QUWH" => 0,
                "KIWH" => 0
            );

            $boardPieces = array
            (
                "PABL" => 8,
                "ROBL" => 2,
                "KNBL" => 2,
                "BIBL" => 2,
                "QUBL" => 1,
                "KIBL" => 1,
                "PAWH" => 8,
                "ROWH" => 2,
                "KNWH" => 2,
                "BIWH" => 2,
                "QUWH" => 1,
                "KIWH" => 1
            );

            $rowsGame = explode(";", $board);
            $game = array();

            for ($i = 0; $i < count($rowsGame); $i++)
            {
                $game[$i] = explode(",", $rowsGame[$i]);
            }

            echo "<div id=\"game\">";

            for ($row = 0; $row < 8; $row++)
            {
                for ($column = 0; $column < 8; $column++)
                {
                    switch ($game[$row][$column])
                    {
                        case "PAWH":
                            $contPieces["PAWH"]++;
                            break;
                        case "ROWH":
                            $contPieces["ROWH"]++;
                            break;
                        case "KNWH":
                            $contPieces["KNWH"]++;
                            break;
                        case "BIWH":
                            $contPieces["BIWH"]++;
                            break;
                        case "QUWH":
                            $contPieces["QUWH"]++;
                            break;
                        case "KIWH":
                            $contPieces["KIWH"]++;
                            break;
                        case "PABL":
                            $contPieces["PABL"]++;
                            break;
                        case "ROBL":
                            $contPieces["ROBL"]++;
                            break;
                        case "KNBL":
                            $contPieces["KNBL"]++;
                            break;
                        case "BIBL":
                            $contPieces["BIBL"]++;
                            break;
                        case "QUBL":
                            $contPieces["QUBL"]++;
                            break;
                        case "KIBL":
                            $contPieces["KIBL"]++;
                            break;
                    }
                }
            }

            AssembleBlackCatches($boardPieces, $contPieces);

            AssembleBoard($game);

            AssembleWhiteCatches($boardPieces, $contPieces);

            echo "</div>";
        }

        DrawChessGame($board);
    ?>
    <footer>
        <a href="privacyPolicies.php" id="link_policies">Privacy policy</a>
    </footer>
</body>
</html>