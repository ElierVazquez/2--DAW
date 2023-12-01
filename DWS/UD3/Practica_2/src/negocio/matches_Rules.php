<?php

    require("../infraestructura/matches_DataAccess.php");

    class Matches_Rules
    {
        private $_ID;
        private $_title;
        private $_white;
        private $_black;
        private $_startDate;
        private $_endDate;
        private $_winner;
        private $_state;

        function __construct()
        {}

        function init($title, $white, $black)
        {
            $this->_title = $title;
            $this->_white = $white;
            $this->_black = $black;
        }

        function toSet($title, $white, $black)
        {
            $matches_rules = new Matches_Rules();
            $matches_rules->init($title, $white, $black);
            $matchesDAL = new Matches_DataAccess();
            $matchesDAL->toSet($title, $white, $black);
        }
    }