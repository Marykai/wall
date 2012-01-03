<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db_message = 'messages';


$link = mysql_connect($host, $username, $password);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

mysql_select_db($db_message, $link);



