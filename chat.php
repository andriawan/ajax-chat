<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'db.php';

if (isset($_POST['user_name'], $_POST['content'])){
    $user_name = $_POST['user_name'];
    $content = $_POST['content'];
}

function insert($user_name, $content){
    $q = "INSERT INTO `chat` (`name`, `chat`) VALUES ('$user_name', '$content')";
    $guery = mysql_query($q);
}

insert($user_name,$content);

