<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'db.php';

$user_name = $_POST['user_name'];

$query = mysql_query("select * from notif order by time desc limit 3");
while ($row = mysql_fetch_array($query)) {
    $name = strip_tags($row['name']);
    $notif = strip_tags($row['condition']);
    
    echo '<i>'. $name.' '. $notif .'</i>'.'<br>';

}
mysql_close($con);
