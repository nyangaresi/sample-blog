<?php
$dbhost = "localhost";
$dbuser = "kenyacar_sbuser";
$dbpass = "team20152016";
$dbname = "kenyacar_sb";

$dbcon = mysqli_connect($dbhost, $dbuser, $dbpass);

if(!$dbcon) {
die("Connection failed". mysqli_connect_error());
}
mysqli_select_db($dbcon,$dbname);

$listdbtables = array_column(mysqli_fetch_all($dbcon->query('SHOW TABLES')),0);

?> 
