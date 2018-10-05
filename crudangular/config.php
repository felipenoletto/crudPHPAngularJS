<?php

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DBNAME', 'angular');

    $connection = new PDO("mysql:host=".HOST.";dbname=".DBNAME, USER, PASS);

?>