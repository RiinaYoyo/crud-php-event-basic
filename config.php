<?php
    //get connection information
    $host = "localhost";
    $username = "root";
    $password = "dimimi971";
    $dbname = "events";

    //create DSN
    $dsn = "mysql:host=$host;dbname=$dbname";

    //option wil get and catch error
    $option = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );

    //connection to DataBase
?>