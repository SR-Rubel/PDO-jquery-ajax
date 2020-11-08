<?php
    include_once 'db.php';

    $selectQuery="SELECT * FROM books";
    
    try {
        $statement=$conn->query($selectQuery);
        $statement->setFetchMode(PDO::FETCH_OBJ);
        while($row=$statement->fetch()){
            echo "Name : ".$row->name." - ".$row->description;
            var_dump($row);
        }
       
        
    } catch (PDOException $ex) {
        echo "Query error".$ex->getMessage();
    }

?>