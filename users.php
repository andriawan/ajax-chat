<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'db.php';
require 'timeAgo.php';

function user_join($user_name) {
    $user_name = mysql_real_escape_string(htmlentities($user_name));
    $x = "INSERT INTO `users` (`user_name`, `count`) VALUES ('$user_name', '1')";
    mysql_query($x);
}

function user_left($user_name) {
    $user_name = mysql_real_escape_string($user_name);
    $user_query = mysql_query("DELETE FROM `users` WHERE `user_name`='$user_name'");
}

function user_list() {
    $user_list = array();
    $users_query = mysql_query("SELECT `user_name` FROM `users`");

    while ($user_row = mysql_fetch_assoc($users_query)) {
        $user_list[] = $user_row['user_name'];
    }

    return $user_list;
}



if (isset($_POST['user_name'], $_POST['action']) || isset($_POST['action'])) {
    $user_name = $_POST['user_name'];
    $action = $_POST['action'];

    if ($action == 'joined') {
        user_join($user_name);
    } else if ($action == 'list') {
        foreach (user_list() as $user) {
            echo '<b>'. $user, '</b>'.'</br>';
        }

    } else if ($action == 'left') {
        user_left($user_name);
    }
}
?>