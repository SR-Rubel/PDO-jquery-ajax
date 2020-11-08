<?php
   
   define('DSH', 'mysql:host=localhost;dbname=pdo');
   define('USERNAME','root');
   define('PASSWORD', '');

   $options=array(PDO::ATTR_PERSISTENT=> true);

    try{
        $conn=new PDO(DSH,USERNAME,PASSWORD,$options);

        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "connection is successful<br>";
    }
    catch(PDOException $ex){
        echo 'error occurred '.$ex->getMessage();
    }


?>