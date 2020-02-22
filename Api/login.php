<?php
if(!isset($_SESSION))
{
    session_start();
}
require_once 'Connection.php';
class DisplayJsonFood{
    function getAllJsonFood(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        $jsonFood = array();
       // $status="status";
       // $message = "message";
        $UserName= $_POST["name"];
        $Password=$_POST["password"];

        //echo $name." ".$email." ".$password." ".$address;
        //$name=$_POST['Name'];
        // echo '<script type="text/javascript">alert("Reached");</script>';
        try{
           
             $sqlInsert = "SELECT * FROM student_info WHERE Name='$UserName' && password='$Password' "; 
            $getJson = $conn->prepare($sqlInsert);
            $getJson->execute();
            $result = $getJson->fetchAll(PDO::FETCH_ASSOC);
           
             if(count($result)>0){
                 $_SESSION['loggedIn']=true;
                 $_SESSION['username']=$UserName;
                
                
                  
                 foreach($result as $data)
                 {    
                     $_SESSION['Id']= $data['ID'];

                     echo '<script type="text/javascript"> window.open("../route.php","_self");</script>';
                 }

               //  echo '<script type="text/javascript"> window.open("../index.php","_self");</script>';

              
         }
             else{
                 echo '<script type="text/javascript"> alert("Invalid users");</script>';
                 echo '<script type="text/javascript"> window.open("../index.php","_self");</script>';
             }
        }catch (PDOException $e){
            echo "Error while displaying json : " . $e->getMessage();
        }

    }
}

$json = new DisplayJsonFood();
$json->getAllJsonFood();

