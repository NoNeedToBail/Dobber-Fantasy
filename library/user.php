<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author Eric
 */
class user {

    private $username;

    function __construct($username) {
        $this->username = $username;
    }

    function get() {
        $con = dbCon();
        $user = mysqli_query($con, "SELECT * from users WHERE username="
                . $this->username);
        return $user;
    }

    function myLeagues() {
        $con = mysqli_connect("localhost", "root", "");
        if (!$con) {
            exit('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }
        //set the default client character set 
        mysqli_set_charset($con, 'utf-8');
        if (mysqli_select_db($con, "dobber") == FALSE) {
            exit('DB select failed!');
        }
        $query="SELECT l.name, l.date_created FROM"
                . " f_leagues l INNER JOIN f_teams t ON l.leagueID=t.leagueID INNER JOIN users u ON"
                . " t.username=u.username and u.username=\"" . $this->username . "\"";
        $leagues = mysqli_query($con, $query);
        return $leagues;
    }

}
