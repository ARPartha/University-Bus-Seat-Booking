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
        $status="status";
        $message = "message";
      //  $start= $_POST["startStation"];
        $end=$_POST["endStation"];
        $time=$_POST["startTime"];

        try{

            $sqlQuery = "SELECT BusNo,Route,Strt_time FROM bus_info
                           WHERE Route LIKE '%$end%' AND Strt_time >= '$time';";
            $getJson = $conn->prepare($sqlQuery);
            $getJson->execute();
            $result = $getJson->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $data)
            {
                $var= $data['Route'];
                         $datas= (explode(",",$var));
                            
                        foreach ($datas as $key) {
                              
                            array_push($jsonFood,
                                array(
                                     'BusRegNo'=>$data['BusNo'],
                                        'BusEndStop'=>$key,
                                        'BusStartTime'=>$data['Strt_time']
                                    
                                ));
                            # code...
                        }
                
            }
        }catch (PDOException $e){
            echo "Error while displaying json : " . $e->getMessage();
        }
        if($sqlQuery){
          // echo '<script>alert("no data found");</script>';
            //echo $sqlQuery;
            echo json_encode(array("bus_data"=>$jsonFood,$status=>1,$message=>"Success"));
        }else{
            
            echo json_encode(array("bus_data"=>null,$status=>0, $message=>"Failed while displaying Main Data"));
        }
    }
}

$json = new DisplayJsonFood();
$json->getAllJsonFood();

