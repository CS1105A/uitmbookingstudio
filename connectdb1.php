<?php

define('DB_USER','root');

define('DB_PASSWORD','');

define('DB_HOST','localhost');

define('DB_NAME','mydatabase1');


$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD, DB_NAME);

if (!$dbc) {

echo "Failed to connect to MySQL: " . mysqli_connect_error();

}

?>