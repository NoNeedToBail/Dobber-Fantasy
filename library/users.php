<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of league
 *
 * @author Eric
 */
class users {
     
    function __construct() {
       
    }
    
    function getUsers() {
        $con = mysqli_connect("localhost", "phpweb", "");
        if (!$con) {
            exit('Connect Error (' . mysqli_connect_errno() . ') '
                   . mysqli_connect_error());
        }
        //set the default client character set 
        mysqli_set_charset($con, 'utf-8');
        mysqli_select_db($con, "test");
        $users = mysqli_query($con, "SELECT * from users");
        return $users;
    }
}