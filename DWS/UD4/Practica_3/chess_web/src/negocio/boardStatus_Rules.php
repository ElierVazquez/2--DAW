<?php
    require("../infraestructura/BoardStatus_DataAccess.php");

    class BoardStatus_Rules
    {
        private $_ID;
        private $_idgame;
        private $_turn;
        private $_board;

        function __construct()
        {}

        function getBoard()
        {
            return $this->_board;
        }

        function init($board)
        {
            $this->_board = $board;
        }

        function toGet($id)
        {
            $boardDAL = new BoardStatus_DataAccess();
            $result = $boardDAL->toGet($id);

            $boardList = array();

            foreach ($result as $board)
            {
                $boardRules = new BoardStatus_Rules();
                $boardRules->init($board["board"]);
                array_push($boardList, $boardRules);
            }

            return $boardList;
        }
    }