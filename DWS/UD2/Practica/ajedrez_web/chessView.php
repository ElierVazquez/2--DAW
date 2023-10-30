<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chess</title>
    <link rel="stylesheet" href="style/chess_game_styles.css">
    <script src="js/movablePieces.js"></script>
</head>
<body>
    <?php
        $board = "ROBL,KNBL,BIBL,QUBL,KIBL,BIBL,KNBL,ROBL;PABL,PABL,PABL,PABL,PABL,PABL,PABL,PABL;0,0,0,0,0,0,0,0;0,0,0,0,0,0,0,0;0,0,0,0,0,0,0,0;0,0,0,0,0,0,0,0;PAWH,PAWH,PAWH,PAWH,PAWH,PAWH,PAWH,PAWH;ROWH,KNWH,BIWH,QUWH,KIWH,BIWH,KNWH,ROWH";


        function DrawChessGame($board)
        {
            $contPABL = 0;
            $contROBL = 0;
            $contKNBL = 0;
            $contBIBL = 0;
            $contQUBL = 0;
            $contKIBL = 0;

            $contPAWH = 0;
            $contROWH = 0;
            $contKNWH = 0;
            $contBIWH = 0;
            $contQUWH = 0;
            $contKIWH = 0;

            $boardBlackPieces = array
            (
                "PABL" => 8,
                "ROBL" => 2,
                "KNBL" => 2,
                "BIBL" => 2,
                "QUBL" => 1,
                "KIBL" => 1
            );

            $boardWhitePieces = array
            (
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
                            $contPAWH++;
                            break;
                        case "ROWH":
                            $contROWH++;
                            break;
                        case "KNWH":
                            $contKNWH++;
                            break;
                        case "BIWH":
                            $contBIWH++;
                            break;
                        case "QUWH":
                            $contQUWH++;
                            break;
                        case "KIWH":
                            $contKIWH++;
                            break;
                    }
                }
            }

            echo "<div id=\"blackCatches\">";

            for ($i = 0; $i < ($boardWhitePieces["PAWH"] - $contPAWH); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"img/PAWH.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardWhitePieces["ROWH"] - $contROWH); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"img/ROWH.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardWhitePieces["KNWH"] - $contKNWH); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"img/KNWH.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardWhitePieces["BIWH"] - $contBIWH); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"img/BIWH.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardWhitePieces["QUWH"] - $contQUWH); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"img/QUWH.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardWhitePieces["KIWH"] - $contKIWH); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"img/KIWH.png\">";
                echo "</div>";
            }

            echo "</div>";

            echo "<div id=\"board\">";

            for ($row = 0; $row < 8; $row++)
            {
                for ($column = 0; $column < 8; $column++)
                {
                    if (($row + $column) % 2== 0)
                    {
                        echo "<div id=\"section$row|$column\" class=\"White section\">";
                            if ($game[$row][$column] != 0)
                            {
                                echo "<img draggable=\"true\" src=\"img/{$game[$row][$column]}.png\" class=\"piece\">";
                            }
                        echo "</div>";
                    }
                    else
                    {
                        echo "<div id=\"section$row|$column\" class=\"Black section\">";
                            if ($game[$row][$column] != 0)
                            {
                                echo "<img draggable=\"true\" src=\"img/{$game[$row][$column]}.png\" class=\"piece\">";
                            }
                        echo "</div>";
                    }
                }
            }

            echo "</div>";

            for ($row = 0; $row < 8; $row++)
            {
                for ($column = 0; $column < 8; $column++)
                {
                    switch ($game[$row][$column])
                    {
                        case "PABL":
                            $contPABL++;
                            break;
                        case "ROBL":
                            $contROBL++;
                            break;
                        case "KNBL":
                            $contKNBL++;
                            break;
                        case "BIBL":
                            $contBIBL++;
                            break;
                        case "QUBL":
                            $contQUBL++;
                            break;
                        case "KIBL":
                            $contKIBL++;
                            break;
                    }
                }
            }

            echo "<div id=\"whiteCatches\">";

            for ($i = 0; $i < ($boardBlackPieces["PABL"] - $contPABL); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"img/PABL.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardBlackPieces["ROBL"] - $contROBL); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"img/ROBL.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardBlackPieces["KNBL"] - $contKNBL); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"img/KNBL.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardBlackPieces["BIBL"] - $contBIBL); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"img/BIBL.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardBlackPieces["QUBL"] - $contQUBL); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"img/QUBL.png\">";
                echo "</div>";
            }
            for ($i = 0; $i < ($boardBlackPieces["KIBL"] - $contKIBL); $i++)
            {
                echo "<div class=\"deathZone\">";
                    echo "<img src=\"img/KIBL.png\">";
                echo "</div>";
            }

            echo "</div>";

            echo "</div>";
        }

        DrawChessGame($board);
    ?>
</body>
</html>