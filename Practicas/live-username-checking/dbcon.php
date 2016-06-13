<?php
define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'YOUR_USERNAME');
define('DB_SERVER_PASSWORD', 'YOUR_PASSWORD');
define('DB_DATABASE', 'YOUR_DATEBASE');

$conexion = mysql_connect(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD);
mysql_select_db(DB_DATABASE, $conexion);
?>