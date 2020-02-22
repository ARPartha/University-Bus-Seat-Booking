<?php
   session_start();
  // SET FOREIGN_KEY_CHECKS=0;
  echo "string";
require_once 'Connection.php';
echo "string2";

echo "string3";
$busno= $_GET["busno"];
$seatno= $_GET["seatno"];
$studentid= $_SESSION['Id'];
//echo $busno;
echo $seatno;
        $_SESSION['bookedbus']= $busno;
        $_SESSION['bookedseat']= $seatno;
    $connection = new Connection();
        $conn = $connection->getConnection();
//SET GLOBAL FOREIGN_KEY_CHECKS=0;
     echo 'hi';
         $query= "SELECT seatno,busno FROM seat where seatno='$seatno' And busno = '$busno'"; 
         $getJson = $conn->prepare($query);
            $getJson->execute();
            $result = $getJson->fetchAll(PDO::FETCH_ASSOC);
            echo 'hi1';
         if(count($result)>0){    

            echo "string";
           
                echo "<script> alert('already booked'); window.open('../route.php','_self');</script>";

              }
            else{
              $query1= "INSERT INTO seat(seatno,studentid,busno) VALUES ('$seatno','$studentid','$busno')";

                     
              echo($query1);
            $conn->query($query1);
            header('Location: ../route.php');
            }   
          


    
?>
