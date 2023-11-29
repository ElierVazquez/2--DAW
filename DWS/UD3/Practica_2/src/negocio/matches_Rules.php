<?php

    require("../infraestructura/matches_DataAccess.php");

    class Matches_Rules
    {
        private $_ID;
        private $_title;
        private $_white;
        private $_black;
        private $_startDate;
        private $_state;

        function __construct()
        {}

        function init($id, $title, $white, $black, $startDate)
        {
            $this->_ID = $id;
            $this->_title = $title;
            $this->_white = $white;
            $this->_black = $black;
            $this->_startDate = $startDate;
            $this->_state = "En curso";
        }
    }