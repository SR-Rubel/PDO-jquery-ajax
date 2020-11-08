<?php

    include_once 'db.php';

    $updateQuery="UPDATE books SET name=:name ,description=:description WHERE id=:id";

    
    try{
        //prepared statement
        $statement=$conn->prepare($updateQuery);

        //bind parameter
        $statement->bindParam(":name",$name);
        $statement->bindParam(":description",$description);
        $statement->bindParam(":id",$id);

        //assigning value to the variable
        $id=4;
        $name="update";
        $description="i'm learning update by pdo";

        //execute
        $statement->execute();
        
        //affected row count pdo function 
        echo $statement->rowCount()." record update";


        echo "record updated <br>";
    }
    catch(PDOException $ex){
        echo "Qurey error".$ex->getMessage(); 
    }


?>