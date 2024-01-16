<?php
    class BoardStatus_DataAccess
    {
        function __construct()
        {}

        function toGet($idgame)
        {
            $connection = mysqli_connect('localhost', 'root', '12345678');
            if (mysqli_connect_errno())
            {
                echo 'Error connecting to MySQL: '.mysqli_connect_error();
            }

            mysqli_select_db($connection, "chess_game");

            $select_board = mysqli_prepare($connection, "SELECT board FROM T_Board_Status WHERE IDGame = {$idgame} ORDER BY turn;");
            $select_board->execute();
            $result = $select_board->get_result();

            $board = array();

            while ($myrow = $result->fetch_assoc())
            {
                array_push($board, $myrow);
            }

            return $board;
        }
    }