<?php
$id = $_GET['id'];
$longdomain = "farrellit.com";
header( "HTTP/1.1 301 Moved Permanently" );
header( "Location: http://".$longdomain."/?p=".$id );
?>