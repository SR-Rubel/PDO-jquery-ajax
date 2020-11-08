<?php
    include_once 'db.php';
    $name="react cook book";
    $introduction="ract is most leading framwork for frontendn ";

    
    try{
        //build the query
        $insertQuery= "INSERT INTO books(name,description,created_at)VALUES(:name,:description,now())";

        // prepared the query
        $statement=$conn->prepare($insertQuery);

        // bind parameter
        $statement->bindParam(":name",$name);
        $statement->bindParam(":description",$description);

        //assigning value to the in variable

        $name="demo";
        $description="i'm learning pdo bind param";


        //execute the statement
        $statement->execute();
        
        echo "record is created";

         //some pdo fucntion
        echo "last inserted record id ".$conn->lastInsertId();


    }
    catch(PDOException $ex){
        echo "query error ".$ex->getMessage();
    }

?>