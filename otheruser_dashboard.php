<?php

session_start();

$userloginid=$_SESSION["userid"] = $_GET['userlogid'];
// echo $_SESSION["userid"];


?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- <link rel="stylesheet" href="style.css"> -->
    </head>
    <!-- <style>
         @import url('https://fonts.googleapis.com/css2?family=Agdasima&family=League+Spartan:wght@300;400;500&family=Montserrat:ital,wght@0,400;0,500;0,700;1,900&family=Nunito:wght@300;400;500&family=Ysabeau+Infant:wght@100&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Agdasima&family=League+Spartan:wght@300;400;500&family=Montserrat:ital,wght@0,400;0,500;0,700;1,900&display=swap');

            .innerright,label {
    color: rgb(16, 170, 16);
    font-weight:bold;
}
body{
      font-family: 'Nunito', sans-serif;
    align-items:center;
    background-repeat: no-repeat;
    background-position:center;
  
  backdrop-filter: blur(10px);
   
    background-image:cover;
    background-size:cover;
   
}
.container{
    
    padding:100px;
}


.imglogo {
    height: 150px;
}

.innerdiv {
    
  
  font-family: 'Nunito', sans-serif;


    text-align: center;
   
    margin-left: 20px;
}
.leftinnerdiv {
     font-size:larger;
    
    float: left;
    width: 25%;
}

.rightinnerdiv {
       float: right;
    width: 75%;
}

.greenbtn {
    font-family: 'Ysabeau Infant', sans-serif;
   
    background-color: #2F3C7E;
    color: #FBEAEB;
    border: none;
    width: 95%;
    height: 40px;
    margin-top: 8px;
}
.greenbtn:hover{
    
    cursor: pointer;
}

.greenbtn,
a {
    
    text-decoration: none;
    color: rgb(255, 255, 255);
    font-size: large;
}
#addperson label{

    display: flex;
    flex-direction: column;
    justify-content: space-around;
    margin-top: 10px;
}
#addbook label {

    display: flex;
    flex-direction: column;
    justify-content: space-around;
    margin-top: 10px;
}

.submitbtn{

    font-size:small;
    font-family: 'Montserrat', sans-serif;
    background-color: #2F3C7E;
    color: #fff;
  
    
    border: none;
    
}
.submitbtn:hover{
    
    cursor: pointer;
}

th{

    color: black;
}
td{

    color: black;
}
td, a{
    color:black;
}
    </style> -->
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Agdasima&family=League+Spartan:wght@300;400;500&family=Montserrat:ital,wght@0,400;0,500;0,700;1,900&family=Nunito:wght@300;400;500&family=Ysabeau+Infant:wght@100&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Agdasima&family=League+Spartan:wght@300;400;500&family=Montserrat:ital,wght@0,400;0,500;0,700;1,900&display=swap');

body{
   
    font-family: 'Montserrat', sans-serif;
      
    align-items:center;
    background-repeat: no-repeat;
    background-position:center;
    
    
  backdrop-filter: blur(10px);
    
    background-image:cover;
    background-size:cover;
    
}
table {
  width: 100%;
}
.container{
    
    
}


.imglogo {
    height: 150px;
}

.innerdiv {
    
 
  font-family: 'Montserrat', sans-serif;
  

    text-align: center;
    
    margin-left: 20px;
}
.leftinnerdiv {
   
    font-family: 'Montserrat', sans-serif;
    float: left;
    width: 25%;
}

.rightinnerdiv {
       float: right;
    width: 75%;
}
.greenbtn {
    font-family: 'Ysabeau Infant', sans-serif;
    background-color:  #408c88;
    color: #FBEAEB;
    border: none;
    width: 95%;
    height: 40px;
    margin-top: 8px;
    
}
button{
    outline:none;
}
.greenbtn:hover{

    cursor: pointer;
}

.greenbtn,
a {
   
    text-decoration: none;
    color: rgb(255, 255, 255);
    font-size: large;
}
#addperson label{
    font-family: 'Montserrat', sans-serif;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    margin-top: 10px;
}
#addbook label {
    font-family: 'Montserrat', sans-serif;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    margin-top: 10px;
}
select{
    padding:8px;
    margin:20px;
}
.submitbtn{
   
    background-color:  #408c88;
    color: #FBEAEB;
    font-family: 'Montserrat', sans-serif;
    
    border: none;
    margin: 10px;
    /* padding: 10px; */
}
.submitbtn:hover{
    cursor: pointer;
}
.navbar {
  
  height: 13vh;
  padding: 2px;
          background-color: #fff;
          color: #271947;
          display: flex; 
          
          justify-content: space-around;
          align-items:center;
          position: relative;
      }

      .navbar ul {
          color: #408c88 ;
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
      }
      .logo img{
    height: 12vh;
    float: left;
}
      .navbar li {
          color: #408c88 ;
          float: right;
      }

      .navbar li a {
            font-size:large;
          display: block;
          padding: 10px 20px;
         
          text-decoration: none;
          color:#408c88 ;
      }

      .navbar li a:hover {
        transition: 0.2s;
          background-color: #408c88 ;
          color: #fff;
      }
      @media screen and (max-width: 600px) {
  .greenbtn{
    font-size:small;
  }
 
  
}
</style>
    <body>

    <?php
   include("data_class.php");
    ?>
           <div class="container">
            <div class="innerdiv">
          
            <div class="leftinnerdiv">
                <br>
                <Button class="greenbtn" onclick="openpart('myaccount')"> MY ACCOUNT</Button>
                <Button class="greenbtn" onclick="openpart('requestbook')"> REQUEST FOOD</Button>
                <Button class="greenbtn" onclick="openpart('issuereport')"> FOOD REPORT</Button>
                <a href="index.php"><Button class="greenbtn" > LOGOUT</Button></a>
            </div>


            <div class="rightinnerdiv">   
            <div id="myaccount" class="innerright portion" style="<?php  if(!empty($_REQUEST['returnid'])){ echo "display:none";} else {echo ""; }?>">
            <Button class="greenbtn" >MY ACCOUNT</Button>

            <?php

            $u=new data;
            $u->setconnection();
            $u->userdetail($userloginid);
            $recordset=$u->userdetail($userloginid);
            foreach($recordset as $row){

            $id= $row[0];
            $name= $row[3];
            $email= $row[1];
            // $pass= $row[3];
            $type= $row[4];
            }               
                ?>

            <p style="color:black"><u>Name of Organization:</u> &nbsp&nbsp<?php echo $name ?></p>
            <p style="color:black"><u> Email:</u> &nbsp&nbsp<?php echo $email ?></p>
            <p style="color:black"><u>Service Offering:</u> &nbsp&nbsp<?php echo $type ?></p>
        
            </div>
            </div>

            <div class="rightinnerdiv" style="overflow-x:auto;">   
            <div id="requestbook" class="innerright portion" style="<?php  if(!empty($_REQUEST['returnid'])){ $returnid=$_REQUEST['returnid'];echo "display:none";} else {echo "display:none"; }?>">
            <Button class="greenbtn" >Request</Button>

            <?php
            $u=new data;
            $u->setconnection();
            $u->getbookissue();
            $recordset=$u->getbookissue();

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr>
            <th>Food Details</th><th>Quantity</th><th>Donor name</th></th><th>Request Food</th></tr>";

            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
               $table.="<td>$row[1]</td>";
               $table.="<td>$row[2]</td>";
                $table.="<td>$row[3]</td>";
                
                $table.="<td><a href='requestbook.php?bookid=$row[1]&userid=$userloginid'><button type='button'  class='submitbtn'>Request</button></a></td>";
           
                $table.="</tr>";
                // $table.=$row[0];
            }
            $table.="</table>";

            echo $table;


                ?>

            </div>
            </div>
            



          

            

        <!-- </div>
        </div> -->
     


        
        <div class="rightinnerdiv" style="overflow-x:auto;">   
            <div id="issuereport" class="innerright portion" style="<?php  if(!empty($_REQUEST['returnid'])){ echo "display:none";} else {echo "display:none"; }?>">
            <Button class="greenbtn" >FOOD RECORD</Button>

            <?php

            $userloginid=$_SESSION["userid"] = $_GET['userlogid'];
            $u=new data;
            $u->setconnection();
            $u->getissuebook($userloginid);
            $recordset=$u->getissuebook($userloginid);

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style='  
            padding: 8px;'>Item ID</th><th>Food Requested</th><th>Issued On</th></tr>";

            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
               $table.="<td>$row[0]</td>";
            //    $table.="<td>$row[1]</td>";
                $table.="<td>$row[2]</td>";
                $table.="<td>$row[3]</td>";
               
               
                $table.="<td><a href='otheruser_dashboard.php?returnid=$row[0]&userlogid=$userloginid'></a></td>";
                $table.="</tr>";
                // $table.=$row[0];
            }
            $table.="</table>";

            echo $table;
            ?>

            </div>
            </div>

        <script>
        function openpart(portion) {
        var i;
        var x = document.getElementsByClassName("portion");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        document.getElementById(portion).style.display = "block";  
        }

   
 
        
        </script>
    </body>
</html>