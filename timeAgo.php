<?php
 function timeAgo($timestamp){
	    $time = time() - $timestamp;
	  
	     
	    if ($time < 60){
	    return ( $time > 1 ) ? 'About '.$time . ' seconds ago' : 'just now';
		}
	    elseif ($time < 3600) {
	    $tmp = floor($time / 60);
	    return ($tmp > 1) ? 'About '. $tmp . ' minutes ago' : ' a minute ago';
	    }
	    elseif ($time < 86400) {
	    $tmp = floor($time / 3600);
	    return ($tmp > 1) ? 'About '. $tmp . ' hours ago' : ' an hour ago';
	    }
	  	elseif ($time < 2592000) {
	    $tmp = floor($time / 86400);
	    return ($tmp > 1) ? date("j M Y h:i A",strtotime($GLOBALS['tanggal'])):date("j M Y h:i A",strtotime($GLOBALS['tanggal']));	
	    }
	    /*elseif ($time < 946080000) {
	    $tmp = floor($time / 2592000);
	    return ($tmp > 1) ? date("j M Y h:i A",strtotime($GLOBALS['tanggal'])):date("j M Y h:i A",strtotime($GLOBALS['tanggal']));
		}
	    else {
	    $tmp = floor($time / 946080000);
	    return ($tmp > 1) ? date("j M Y h:i A",strtotime($GLOBALS['tanggal'])):date("j M Y h:i A",strtotime($GLOBALS['tanggal']));
	    }*/
    }
?>