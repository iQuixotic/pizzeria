<?php 
include 'secret.php';

$Connection=mysql_connect('localhost', $DB_USER, $DB_PASSWORD);
$Selected=mysql_select_db('pizzahouse', $Connection);



