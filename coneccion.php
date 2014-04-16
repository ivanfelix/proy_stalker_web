<?php
    $con = mysql_connect('localhost','ivan','sC3ucbNcC3yFynFR');
    if(!$con){
        die('Connect Error(' . mysql_error());
    }
    $db_selected = mysql_select_db('stalker',$con);
    if(!$db_selected){
        die('Can\'t use db:' . mysql_error());
    }
?>