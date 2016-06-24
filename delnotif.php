<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'db.php';

$user_name = $_POST['user_name'];

$user_query = mysql_query("DELETE FROM `notif` WHERE `name`='$user_name'");

mysql_close($con);