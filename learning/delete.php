<?php
    include_once 'db.php';
    $deleteQuery="DELETE FROM books WHERE id=4";
    
    try
    {
        $result=$conn->exec($deleteQuery);
        echo "$result record deleted <br>";
    }
    catch(PDOException $ex){
        echo "Query error ".$ex->getMessage();
    }

?>