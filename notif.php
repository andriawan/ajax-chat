<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'db.php';

$user_name = $_POST['user_name'];

function insert($user_name){
    $q = "INSERT INTO `notif` (`name`, `condition`) VALUES ('$user_name', 'is writing a chat...')";
    $guery = mysql_query($q);
}

insert($user_name);
