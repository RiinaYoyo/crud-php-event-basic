<?php
    //get all element of table events
    function get_event_list(){
        include '../connection.php';
        try{
            return $response = $connection->query("SELECT * FROM event");
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    //add an event to the db
    function add_event($name,$date,$start,$end,$description,$price,$image){
        require"../connection.php";
        $sql = "INSERT INTO event (name,date,start,end,description,price,image) VALUE (?,?,?,?,?,?,?)";
        try{
            $result = $connection->prepare($sql);
            $result->bindValue(1,$name,PDO::PARAM_STR);
            $result->bindValue(2,$date,PDO::PARAM_STR);
            $result->bindValue(3,$start,PDO::PARAM_STR);
            $result->bindValue(4,$end,PDO::PARAM_STR);
            $result->bindValue(5,$description,PDO::PARAM_STR);
            $result->bindValue(6,$price,PDO::PARAM_INT);
            $result->bindValue(7,$image,PDO::PARAM_STR);
            $result->execute();
            
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
        return true;
    }

    function get_event($id){
        require "../connection.php";
        
    }
?>