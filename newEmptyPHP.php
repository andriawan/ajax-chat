<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

mysql_connect('localhost', 'root', 'mysql123456');
mysql_select_db('ajax');

function user_list() {
    $user_list = array();
    $users_query = mysql_query("SELECT `user_name` FROM `users`");

    while ($user_row = mysql_fetch_assoc($users_query)) {
        $user_list[] = $user_row['user_name'];
    }
    return $user_list;
}

foreach (user_list() as $user) {
    echo $user, '</br>';
}

$user_count = "SELECT COUNT(`count`) FROM `users`";
$counnt = (int) mysql_query($user_count);

echo $counnt;

$q = mysql_query("SELECT `count` From `users`");
while ($row = mysql_fetch_array($q)){
    $count = $row['count'];
    echo $count. '</br>';
}
?>