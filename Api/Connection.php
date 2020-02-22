<?php
    
    $server = "localhost";
    $name = "root";
    $password = "";
    $dbname = "bussystem";

    $conn = mysqli_connect($server,$name,$password,$dbname);

    if($conn)
    {
    //  echo "connected";
    }

class Connection{
    function getConnection(){
        $host       = "localhost";
        $username   = "root";
        $password   = "";
        $dbname     = "bussystem";
        try{
            $conn    = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch (PDOException $e){
            echo "ERROR CONNECTIONF : " . $e->getMessage();
        }
        return null;
    }
}
?> 

