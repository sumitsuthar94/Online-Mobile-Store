<?php
$connection = mysql_connect('localhost', 'root', '');
if (!$connection){
error("could not connect to server");
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('store');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}