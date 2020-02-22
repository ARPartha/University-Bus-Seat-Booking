
<?php  session_start();

?>
<!DOCTYPE html>
<html>
<?php

if(!isset($_SESSION['loggedIn']))   // Checking whether the session is already there or not if
    // true then header redirect it to the home page directly
{
    echo '<script type="text/javascript"> alert(1);</script>';
    echo '<script type="text/javascript"> window.open("index.php","_self");</script>';            //  On Successful Login redirects to home.php
    exit();
    /* Redirect browser */

}
else
{
    if($_SESSION['loggedIn']==false)
    {
        echo '<script type="text/javascript"> alert(2);</script>';
        echo '<script type="text/javascript"> window.open("index.php","_self");</script>';            //  On Successful Login redirects to home.php
        exit();
    }
}

?>

<head>
	<title>Daffodil Bus Management System</title>

	<style type="text/css">
		
		.topnav {
    background-color: #333;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: right;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
    background-color: #4CAF50;
    color: white;
}

.left{
	float: left;
	margin-right: 250px;
}
		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 40%;
		}

		td, th {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
		}

		tr:nth-child(even) {
			background-color: #dddddd;
		}

        .body{

            background-image:  url('logo.png');
        }
	</style>

	<link href="frontCustom/css/bootstrap.css" rel='stylesheet' type='text/css' />

</head>

<body>

 <div class="body">        
	<div class="topnav">
				  
				  <a class="left" href="index.php"> Daffodil Bus Management System </a>

                                <?php



                                   

                                     if(isset($_SESSION['bookedbus']))
                                        {
                                        echo "

                                        <p style='float: left;padding: 14px 10px;color: white;height: 20px;'>Booked Bus  :".$_SESSION['bookedbus']."</p>
                                  ";
                                        }
                                    else{
                                    echo "

                                        <p style='float: left;padding: 14px 10px;color: white;height: 20px;margin-right: 50px;'>booked bus: </p>
                                  ";
                                        }

                                    if(isset($_SESSION['bookedseat'])){
                                         echo "

                                       <p style='float: left;padding: 14px 10px;color: white;height: 20px;margin-right: 400px;'>Booked seat  :".$_SESSION['bookedseat']."</p>
                                  ";
                                    } 
                                    else{
                                        echo "

                                        <p style='float: left;padding: 14px 10px;color: white;height: 20px;margin-right: 400px;'>booked seat: </p>
                                  ";

                                    }      
                     
                                   

                                     if(isset($_SESSION['username']))
                                        {
                                        echo "

                                        <a  href='Api/logout.php' >".$_SESSION['username']."</a>
                                  ";
                                        }
                                        else{

                                        }


                                
                                ?>   
       

		</div>


		<div>
			<br>
			<br>
			<form method="POST" name="form_data" onsubmit="return getData()" style="width: 60%;padding-left: 30px ">
				<label for="startStation">From:</label>
				<div class="row">

					<div class="col-md-3">
						<select id="startStation" class="form-control option" name = "startStation">
							


						</select>
					</div>


				</div>
				<br>
				<br>
				<label for="endStation">To:</label>
				<div class="row">

					<div class="col-md-3">
						<select id="endStation" class="form-control option" name = "endStation" >
						<option>Transport To</option>

						</select>
					</div>

				</div>
				<br>
				<br>
				<label for="startTime">Bus Time</label>
				<div class="row">
					<div class="col-md-3">
						<input type="time" id="startTime" class="form-control option" name = "startTime">
						</input>
					</div>
				</div>
				<br>
				<div class="col-md-3">
					<button type="Submit"  class="btn btn-primary submit">Submit</button>
				</div>
			</form>
			<table style=" position: absolute; top: 50px; margin-top:10px; margin-left:50%;" id="data">
				<thead>
				<tr>
					<th>Bus No.</th>
					
					<th>From DIU To</th>
					<th>DepartureTime</th>
                    <th>Book Seat</th>
				</tr>
				</thead>
			</table>
		</div>
	<script  src="frontCustom/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript">
        $(document).ready(function() {
            var startStation = document.getElementById("startStation");
            var endStation = document.getElementById("endStation");
            var d = new Date(); // for now
            var startTime = d.getHours()+":"+d.getMinutes()+":"+d.getSeconds();
           // alert(startTime);
            document.getElementById("startTime").value=startTime;

            //alert(formatAMPM(d));

			    var option = document.createElement("option");
                option.text = "DIU";
                startStation.add(option);

                document.getElementById('startStation').value="DIU";
            
               /////end station ///////////
			
                
                var option = document.createElement("option");
                option.text = "Shaymoli";
                endStation.add(option);

                var option = document.createElement("option");
                option.text = "Kollanpur";
                endStation.add(option);

                var option = document.createElement("option");
                option.text = "Technical";
                endStation.add(option);

                var option = document.createElement("option");
                option.text = "Mirpur 1";
                endStation.add(option);

                var option = document.createElement("option");
                option.text = "Mirpur 10";
                endStation.add(option);


                var option = document.createElement("option");
                option.text = "Kalshi";
                endStation.add(option); 

                var option = document.createElement("option");
                option.text = "Bijoy Soroni";
                endStation.add(option);

                var option = document.createElement("option");
                option.text = "Mohakhali";
                endStation.add(option);
 
                var option = document.createElement("option");
                option.text = "Bonani";
                endStation.add(option); 

                var option = document.createElement("option");
                option.text = "Bissho road";
                endStation.add(option); 

                var option = document.createElement("option");
                option.text = "Airport";
                endStation.add(option); 

                var option = document.createElement("option");
                option.text = "Uttara";
                endStation.add(option); 

                var option = document.createElement("option");
                option.text = "Abdullahpur";
                endStation.add(option); 


                var option = document.createElement("option");
                option.text = "Sciencelab";
                endStation.add(option);

                var option = document.createElement("option");
                option.text = "Shahbag";
                endStation.add(option); 

                var option = document.createElement("option");
                option.text = "Kakrail";
                endStation.add(option); 


                var option = document.createElement("option");
                option.text = "Shantinagar";
                endStation.add(option); 

                var option = document.createElement("option");
                option.text = "Motijhil";
                endStation.add(option); 

                var option = document.createElement("option");
                option.text = "Gulistan";
                endStation.add(option); 

                var option = document.createElement("option");
                option.text = "Gulshan 2";
                endStation.add(option);

                var option = document.createElement("option");
                option.text = "Gulshan 1";
                endStation.add(option);

                var option = document.createElement("option");
                option.text = "Rampura";
                endStation.add(option);

                var option = document.createElement("option");
                option.text = "Notunbazar";
                endStation.add(option);

                document.getElementById('endStation').value="Transport To";
                /////////////////////////////

                


            //getting stations

        });
        function getData()
		{

            $("#data tr").remove();
            var table = document.getElementById("data");
            var row = table.insertRow(0);

            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            //alert(datas[key].BusRegNo);
            cell1.innerHTML ="Bus No.";
            cell2.innerHTML = "From DIU To";
            cell3.innerHTML = "Departure Time";
            cell4.innerHTML= "Book";
		   // var startStation=document.getElementById("startStation").value;
            var endStation=document.getElementById("endStation").value;
            var d = new Date(); // for now
            //var startTime=d.getHours()+":"+d.getMinutes()+":"+d.getSeconds();
            var startTime=document.getElementById("startTime").value;
            startTime+=":00";
            //alert(startTime);
            $.ajax({
                type: 'POST',
                url: 'Api/getData.php',
                async:false,
                data: {
                    
                    'endStation': endStation,
                    'startTime': startTime
                },
                error: function (ts) {
                    alert(ts.responseText);
                },
                success: function(data)
                {
                    //when found names sending them in datalist for suggetions
                   // alert(data);
                    var obj = JSON.parse(data);
                    var datas=obj.bus_data;
                    console.log(datas);
                    var table = document.getElementById("data");
                    var i=1;
                    for (var key in datas) {
                        if (datas.hasOwnProperty(key)) {
                            var row = table.insertRow(i);
                            i++;

                            var cell1 = row.insertCell(0);
                            var cell2 = row.insertCell(1);
                            var cell3 = row.insertCell(2);
                             var cell4 = row.insertCell(3);
                            //var cell4 = row.insertCell(3);
							//alert(datas[key].BusRegNo);
                            cell1.innerHTML =datas[key].BusRegNo;
                         //   cell2.innerHTML = datas[key].BusStartStop;
                            cell2.innerHTML = datas[key].BusEndStop;
                            var time=formatAMPM(datas[key].BusStartTime);
                            cell3.innerHTML = time;

                            /******************************/
                                cell4.innerHTML= '<a href="bus_seat.php">Book </a>'
                        }
                    }


                }
            });
            $('#data').find('tr').click( function(){

                    var cell_num = ($(this).index());
                    var current_row=($(this).closest('tr'));
                    var bus = current_row.find('td:eq(0)').text();
                  // console.log(bus);
                   // var table = document.getElementById("data");
                           //s  alert('You clicked row '+ bus);
                             //////// passing bus no //////////////
                             localStorage.setItem("bus", bus);
                             ////////////////////////////////////
                        });
            return false;
		}
        function formatAMPM(date) {
            var da = date.split(':');
            var hours = da[0];
            var minutes = da[1];
            var ampm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12;
            hours = hours ? hours : 12; // the hour '0' should be '12'
            minutes = minutes < 10 ? '0'+minutes : minutes;
            var strTime = hours + ':' + minutes + ' ' + ampm;
            return strTime;
        }

	</script>
</div>
</body>
</html>