<?php 
    require 'config.php';


    try {
        $connection = new PDO ($dsn , $username , $password , $options);
        echo "Je suis connecté à la DB";
    }
    catch(PDOException $e){
        echo $e->getMessage();
        exit;
    }

?>