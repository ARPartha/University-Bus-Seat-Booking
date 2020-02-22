<?php

// include db connect class
require_once 'Connection.php';
class InsertDetails{
    function startInsertDetails(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
         $Id =$_POST['id'];
        $UserName   = $_POST['name'];
        $contact   = $_POST['number'];
	    $Email   = $_POST['email'];
        $Password    = $_POST['password'];
        
             try{
          
                $sqlInsert = "INSERT INTO student_info (ID,Name,contact,Email,password) VALUES ('$Id', '$UserName',$contact,'$Email','$Password')";
              $conn->exec($sqlInsert);
                  $conn->exec($sqlInsert);
                 
         
        }catch (PDOException $e){
            echo "Error while inserting ".$e->getMessage();
        }
        //cek is the row was inserted or not
        if($sqlInsert){
            //success inserted
            echo '<script type="text/javascript">alert("Successfully Inserted !!!");</script>';
            //echo $sqlInsert;
            echo '<script type="text/javascript"> window.open("../index.php","_self");</script>';
            die();
        }else{
            echo '<script type="text/javascript">alert("Error , Try Again!!!");</script>';
            //echo '<script type="text/javascript"> window.open("../pages/dashboard.php","_self");</script>';
            die();
        }
    }
 }


    $insert = new InsertDetails();
    $insert->startInsertDetails();
