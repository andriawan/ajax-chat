<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'db.php';
require 'timeAgo.php';


function timePost() {
    $timed = array();
    $q = mysql_query("SELECT `time` FROM `users`");

    while ($user_row = mysql_fetch_assoc($q)) {
        $timed[] = $user_row['time'];
    }

    return $timed;
}

if (isset($_POST['user_name'], $_POST['action']) || isset($_POST['action'])) {
    $user_name = $_POST['user_name'];
    $action = $_POST['action'];
    
    if ($action == 'list'){
        foreach (timePost() as $times){
            echo '<i>'. timeAgo(strtotime($times)). '</i>'.'</br>';
        }
    }
}


