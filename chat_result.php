<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'db.php';

$query = mysql_query("select * from chat order by time desc limit 10");
while ($row = mysql_fetch_array($query)) {
    $name = strip_tags($row['name']);
    $chat = strip_tags($row['chat']);
    
    echo '<b>'. $name. '</b>'.':'.' '. $chat .'<br>';

}
mysql_close($con);
