<?php


define('HOSTNAME', 'localhost');
define('DATABASE_USERNAME', 'root');
define('DATABASE_PASSWORD', '');
define('DATABASE_NAME', 'mahara_server');
$MySQL_Handle = mysqli_connect(HOSTNAME,DATABASE_USERNAME,DATABASE_PASSWORD,DATABASE_NAME) ;
if (!$MySQL_Handle) {
    die("Unable to Connect database: " . mysqli_connect_error());
}

$sSQL= 'SET NAMES utf8'; 

if(!mysqli_query($MySQL_Handle,$sSQL) )
    die ('Can\'t charset in DataBase'); 
?>
