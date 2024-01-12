<?php

require("../infraestructura/users_DataAccess.php");

class User_Rules
{

	function __construct()
    {
    }

    function toInsert() {

    }

    function toVerify($user, $pssw)
    {
        $usersDAL = new Users_DataAccess();
        $res = $usersDAL->toVerify($user,$pssw);
        
        return $res;
        
    }
}