<?php
    include_once 'db.php';

    try{
        // echo $result=$conn->exec('ALTER TABLE books ENGINE=InnoDB');
        // $statement=$conn->query("SHOW TABLE STATUS FROM pdo");
        // var_dump($statement->fetch());

        $name= "My Book";
        $description="simple details";

        // begin a transaction
        $conn->beginTransaction();
        
        $sql1="INSERT INTO books(name,description,created_at)
                VALUES(:name,:description,now())
            ";
        //prepare statement
        $statement=$conn->prepare($sql1);

        //bind
        $statement->bindParam(":name",$name);
        $statement->bindParam(":description",$description);

        $statement->execute();
        echo "insert succeeded <br>";

        $sql2="DELETE FROM books where id=:id";
        $statement=$conn->prepare($sql2);
        $statement->execute(array(":id"=>2));
        echo "item deleted <br>";

        $conn->commit();
        echo "opearation succeeded <br>";
    }
    catch(PDOException $ex){
        $conn->rollBack();
        echo "An error occurred ".$ex->getMessage();
    }

?>