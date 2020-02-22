<!DOCTYPE html>
<html>
<head>

 <meta charset="utf-8">
  
<?php  
    session_start();

?>
  <title></title>

  <style type="text/css">
    
    body{
      background-image: url("logo.jpg");

 
    }

    .main{
          position:fixed;
          padding:0;
          margin:0;

          top:0;
          left:0;

          width: 100%;
          height: 100%;
          background-color: rgb(246, 238, 242);
          opacity: 0.9;
          overflow: scroll;
    }

    .contant{
        position:fixed;
          padding:0;
          margin:0;

          top:0;
          left:0;

          width: 100%;
          height: 100%;
          text-align: center;
          overflow: scroll;
         }

    .seats{
           position:fixed;
          padding:0;
          margin-top: 15px;
          margin-left: 35%;
          top:330;
          left:450;

          width: 400px;
          height: 600px;
          background-color: rgba(34, 195, 220, 0.4);
          border-style: solid black 2px;
          
           
    }
    .left{
           float: left; 
           width: 180px;
           height: 600px; 
           background-color: rgba(65, 295, 120, 0.4);
           margin-right: 10px; 
           overflow: scroll;
    }
    .right{
           float: right;
           width: 200px;
           height: 600px; 
           background-color: rgba(220, 34, 195, 0.4);
           overflow: scroll;
    }
    .seat_style{
         width: 60px;
         height:60px;
         margin-left: 10px; 
         margin-top: 20px; 
         margin-right: 10px;
         float: left;
         border-radius: 12px;
    }


  </style>
</head>
<body>
  <div class="main">
          <div class="contant">
               <h1 id="busno" style="float: left;">Bus No:</h1>
               <h2 id="seatno" style="float: right;">Seat No:</h2>
               <h1>Please Select a seat</h1>

               <div class="seats">

                 <div class="left">
                    <button class="seat_style" id="A1" onclick="getseatid(this.id);">A1</button>
                    <button class="seat_style" id="A2" onclick="getseatid(this.id);">A2</button>
                    <button class="seat_style" id="B1" onclick="getseatid(this.id);">B1</button>
                    <button class="seat_style" id="B2" onclick="getseatid(this.id);">B2</button>
                    <button class="seat_style" id="C1" onclick="getseatid(this.id);">C1</button>
                    <button class="seat_style" id="C2" onclick="getseatid(this.id);">C2</button>
                    <button class="seat_style" id="D1" onclick="getseatid(this.id);">D1</button>
                    <button class="seat_style" id="D2" onclick="getseatid(this.id);">D2</button>
                    <button class="seat_style" id="E1" onclick="getseatid(this.id);">E1</button>
                    <button class="seat_style" id="E2" onclick="getseatid(this.id);">E2</button>
                    <button class="seat_style" id="F1" onclick="getseatid(this.id);">F1</button>
                    <button class="seat_style" id="F2" onclick="getseatid(this.id);">F2</button>
                   
                 </div>
                 <div class="right">
                    <button class="seat_style" id="A3" onclick="getseatid(this.id);">A3</button>
                    <button class="seat_style" id="A4" onclick="getseatid(this.id);">A4</button>
                    <button class="seat_style" id="B3" onclick="getseatid(this.id);">B3</button>
                    <button class="seat_style" id="B4" onclick="getseatid(this.id);">B4</button>
                    <button class="seat_style" id="C3" onclick="getseatid(this.id);">C3</button>
                    <button class="seat_style" id="C4" onclick="getseatid(this.id);">C4</button>
                    <button class="seat_style" id="D3" onclick="getseatid(this.id);">D3</button>
                    <button class="seat_style" id="D4" onclick="getseatid(this.id);">D4</button>
                    <button class="seat_style" id="E3" onclick="getseatid(this.id);">E3</button>
                    <button class="seat_style" id="E4" onclick="getseatid(this.id);">E4</button>
                    <button class="seat_style" id="F3" onclick="getseatid(this.id);">F3</button>
                    <button class="seat_style" id="F4" onclick="getseatid(this.id);">F4</button>
                 </div>
               </div>

          </div>
  </div>
<script  src="frontCustom/js/jquery-2.2.3.min.js"></script>
  <script type="text/javascript">

    /////////// getting bus no ////////////// 
     var busno = localStorage.getItem("bus");
    ////////////////////////////////////////   
    console.log('bPOST');
       document.getElementById("busno").innerHTML="Bus No: "+ busno;
    console.log('POST');

  ////////////////////////////////////////////  get reseved seat ///////////////
        
    console.log('aPOST');

 $(document).ready(function(){
      $.ajax({

                type: 'POST',
                url: 'Api/get_reserved_seat.php',
                async:false,
                data: {
                    
                    'busno': busno
                   },
                error: function (ts) {
                    alert(ts.responseText);
                },
                success: function(data)
                {
                  
                    //when found names sending them in datalist for suggetions
                  
                    var obj = JSON.parse(data);
                    var datas=obj.seatno;
                    console.log(datas);
                    var i=1;
                    for (var key in datas) {
                        if (datas.hasOwnProperty(key)) {
                           
                           document.getElementById(datas[key].seatNo).disabled=true;
                           document.getElementById(datas[key].seatNo).style.backgroundColor = 'rgb(204, 0, 0)';
                            
                        }
                    }


                }
            });
     });
  //////////////////////////////////////////////////////////////////////////////////

       
       function getseatid(clicked){
         
             document.getElementById("seatno").innerHTML = "Seat No: "+clicked;
              
         window.location.href = "Api/bus_seat.php?busno="+busno+"&seatno="+clicked;

              //window.location.href="Api/bus_seat.php";
            }

            
       ///////////////////////////////////////////////
  </script>

                     <!-- finding out Booked Seat  -->
  
     <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> -->

</body>
</html>