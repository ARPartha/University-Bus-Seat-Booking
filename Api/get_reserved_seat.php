<?php

		
	if(!isset($_SESSION)){
       session_start();
    }
	require_once 'Connection.php';
   
   class DisplayJsonFood{
    function getAllJsonFood(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        $jsonFood = array();
        $status="status";
        $message = "message";
       $busno= $_POST["busno"];

        try{

        	   $check="SELECT * FROM seat WHERE busno = '$busno'";
        	  
               $getJson = $conn->prepare($check);
               $getJson->execute();
               $result = $getJson->fetchAll(PDO::FETCH_ASSOC);
            
            foreach($result as $data)
            {
                
                        
                              
                            array_push($jsonFood,
                                array(
                                     'seatNo'=>$data['seatno'],                                   
                                ));                  
                
            }
        }catch (PDOException $e){
            echo "Error while displaying json : " . $e->getMessage();
        }
        if($check){
          // echo '<script>alert("no data found");</script>';
            //echo $sqlQuery;
            echo json_encode(array("seatno"=>$jsonFood,$status=>1,$message=>"Success"));
        }else{
            
            echo json_encode(array("seatno"=>null,$status=>0, $message=>"Failed while displaying Main Data"));
        }
    }
}

$json = new DisplayJsonFood();
$json->getAllJsonFood();
















    
                      
              ?>