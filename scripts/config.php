<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'bczbjsrb');
   define('DB_DATABASE', 'project');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>