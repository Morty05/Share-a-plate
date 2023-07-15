<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agdasima&family=League+Spartan:wght@300;400;500&family=Montserrat:ital,wght@0,400;0,500;0,700;1,900&family=Nunito:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agdasima&family=League+Spartan:wght@300;400;500&family=Montserrat:ital,wght@0,400;0,500;0,700;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
    
</head>
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
    margin-left: 20px;
    padding: 10px
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
  .greenbtn {
    font-size:small;
  }
  .navbar{
    flex-direction:column;
  }
  
}
</style>
<body >
<?php
   include("data_class.php");

$msg="";

   if(!empty($_REQUEST['msg'])){
    $msg=$_REQUEST['msg'];
 }

if($msg=="done"){
    echo "<div class='alert alert-success' role='alert'>Sucssefully Done</div>";
}
elseif($msg=="fail"){
    echo "<div class='alert alert-danger' role='alert'>Fail</div>";
}

    ?>

<div class="navbar">
        <div class="logo"><img src="imgonline-com-ua-ReplaceColor-lf70ziu8pAps-removebg-preview.png" alt=""></div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
      
    </div>
    <div class="container">
        <div class="innerdiv">
            
            <div class="row">
                <!-- <img class="imglogo" src="https://img.freepik.com/free-vector/hand-drawn-flat-design-food-bank-illustration_23-2149354222.jpg?w=740&t=st=1688945479~exp=1688946079~hmac=9df2a0deb4ad81ca9d5c6f7736c2b43f0a7eaaf14697dfb3d709cba97b3e376a";
" alt=""> -->
            </div>
            <div class="leftinnerdiv">
                <!-- <Button class="greenbtn"> ADMIN</Button> -->
                <br>
                <Button class="greenbtn" onclick="openpart('addbook')" >  ADD INVENTORY</Button>
                <Button class="greenbtn" onclick="openpart('bookreport')" >  FOOD REPORT</Button>
                <Button class="greenbtn" onclick="openpart('bookrequestapprove')"> FOOD REQUESTS</Button>
                <Button class="greenbtn" onclick="openpart('addperson')">  ADD NGO</Button>
                <Button class="greenbtn" onclick="openpart('studentrecord')">  NGOs </Button>
                <Button class="greenbtn"  onclick="openpart('issuebook')">  PERMIT TO </Button>
                <Button class="greenbtn" onclick="openpart('issuebookreport')">  PERMITTED</Button>
                <a href="index.php"><Button class="greenbtn" > LOGOUT</Button></a>
            </div>
            

            
            <div class="rightinnerdiv">   
            <div id="addperson" class="innerright portion" style="display:none">
            <Button class="greenbtn" >ADD NGO</Button>
            <form action="addpersonserver_page.php" method="post" enctype="multipart/form-data">
            <label>Name:</label><input type="text" name="addname"/>
            </br>
            
            <label>Email:</label><input  type="email" name="addemail"/></br>
            <label>Pasword:</label><input type="pasword" name="addpass"/>
            </br>
            <label for="typw">Choose type:</label>
            <select name="type" style="padding:10px">
                <option value="Charity">Charity</option>
            </select>

            <input type="submit" class="submitbtn" value="SUBMIT"/>
            </form>
            </div>
            </div>

            <div class="rightinnerdiv" style="overflow-x:auto;">   
            <div id="bookrequestapprove" class="innerright portion" style="display:none">
            <Button class="greenbtn" > REQUEST APPROVE</Button>
            <?php
            $u=new data;
            $u->setconnection();
            $u->requestbookdata();
            $recordset=$u->requestbookdata();

            $table="<table style='  padding: 20px; margin:20px; color:#408c88; font-family: 'Montserrat', sans-serif; border-collapse: collapse;width: 100%;'><tr><th style='
            padding: 20px; margin:20px; float: center;'>NGO ID</th><th>NGO NAME </th><th>FOOD REQUESTED</th><th>Approve</th></Str>";
            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
              "<td>$row[1]</td>";
              "<td>$row[2]</td>";
            //   $table.="<td>$row[0]</td>";
              $table.="<td>$row[1]</td>";
              $table.="<td>$row[2]</td>";
                $table.="<td>$row[3]</td>";
                // $table.="<td>$row[4]</td>";
                // $table.="<td>$row[5]</td>";
                // $table.="<td>$row[6]</td>";
               // $table.="<td><a href='approvebookrequest.php?reqid=$row[0]&book=$row[5]&userselect=$row[3]&days=$row[6]'><button type='button' class='btn btn-primary'>Approved BOOK</button></a></td>";
                 $table.="<td><a href='approvebookrequest.php?reqid=$row[0]&userselect=$row[2]&book=$row[3]'><button type='button'  class='submitbtn'>Approve</button></a></td>";
                // $table.="<td><a href='deletebook_dashboard.php?deletebookid=$row[1]'>Delete</a></td>";
                $table.="</tr>";
                // $table.=$row[0];
            }
            $table.="</table>";

            echo $table;
            ?>
           

            </div>
            </div>
            
            <div class="rightinnerdiv" >   
            <div id="addbook" class="innerright portion" style="<?php  if(!empty($_REQUEST['viewid'])){ echo "display:none";} else {echo ""; }?>">
            <Button class="greenbtn" >ADD INVENTORY</Button>
            <br>
            <form action="addbookserver_page.php" method="post" enctype="multipart/form-data">
            </br>
            <label> Food Details:</label><input  type="text" name="bookdetail"/></br>
            <label>Donor name:</label><input type="text" name="bookaudor"/></br>
            <label>Quantity:</label><input type="text" name="bookquantity"/></br>
            
            </br>
   
            <input type="submit" class="submitbtn" value="SUBMIT"/>
            </br>
            </br>

            </form>
            </div>
            </div>

            <div class="rightinnerdiv" style="overflow-x:auto;" >   
            <div id="bookreport" class="innerright portion" style="overflow-x:auto;display:none;">
            <Button class="greenbtn" >FOOD RECORD</Button>

            <?php
          
$u = new data;
$u->setconnection();
$u->getbook();
$recordset = $u->getbook();

$table = "<table style=' color:#408c88;overflow-x:auto; font-family: 'Montserrat',sans-serif;border-collapse: collapse;width: 100%;'>";
$table .= "<tr><th style='padding: 20px;'>Donor ID</th><th>Food Details</th><th>Quantity</th><th>Donor</th></tr>";

foreach ($recordset as $row) {
    $table .= "<tr>";
    $table .= "<td>" . $row[0] . "</td>";
    $table .= "<td>" . $row[1] . "</td>";
    $table .= "<td>" . $row[2] . "</td>";
    $table .= "<td>" . $row[3] . "</td>";
  
    $table .= "<td><a href='admin_service_dashboard.php?viewid=" . $row[0] . "'></a></td>";
    $table .= "</tr>";
}

$table .= "</table>";

echo $table;
?>


            </div>
            </div>
            <div class="rightinnerdiv" style="overflow-x:auto;">   
            <div id="issuebookreport" class="innerright portion" style="display:none">
            <Button class="greenbtn" >Issue Food Record</Button>

            <?php
            $u=new data;
            $u->setconnection();
            $u->issuereport();
            $recordset=$u->issuereport();

            $table="<table style=' color:#408c88;  font-family: 'Montserrat', sans-serif;border-collapse: collapse;width: 100%;'><tr><th style='  
            padding: 20px;'>Charity id:</th><th>Food Details:</th><th>Issue Date</th></tr>";

            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
                $table.="<td>$row[1]</td>";
                $table.="<td>$row[2]</td>";
                $table.="<td>$row[3]</td>";
                // $table.="<td>$row[4]</td>";
                // $table.="<td><a href='otheruser_dashboard.php?returnid=$row[0]&userlogid=$userloginid'>Return</a></td>";
                $table.="</tr>";
                // $table.=$row[0];
            }
            $table.="</table>";

            echo $table;
            ?>

            </div>
            </div>

            <div class="rightinnerdiv">   
            <div id="issuebook" class="innerright portion" style="display:none">
            <Button class="greenbtn" >ISSUE FOOD</Button>
            <form  action="issuebook_server.php" method="post" enctype="multipart/form-data">
            <label for="book">Choose from:</label>
           
            <select name="book" >
            <?php
            $u=new data;
            $u->setconnection();
            $u->getbookissue();
            $recordset=$u->getbookissue();
            foreach($recordset as $row){

                echo "<option value='". $row[1] ."'>" .$row[1] ."</option>";
        
            }            
            ?>
            </select>
<br>
            <label for="Select Student">Select Charity:</label>
            <select name="userselect" >
            <?php
            $u=new data;
            $u->setconnection();
            $u->userdata();
            $recordset=$u->userdata();
            foreach($recordset as $row){
               $id= $row[0];
                echo "<option value='". $row[3] ."'>" .$row[3] ."</option>";
            }            
            ?>
            </select>
<br>
           <!-- <label>Days</label> <input type="number" name="days"/> -->

            <input type="submit" class="submitbtn" value="SUBMIT"/>
            </form>
            </div>
            </div>



           
            <div class="rightinnerdiv" style="overflow-x:auto;">   
            <div id="studentrecord" class="innerright portion" style="display:none">
            <Button class="greenbtn" >Student RECORD</Button>

            <?php
            $u=new data;
            $u->setconnection();
            $u->userdata();
            $recordset=$u->userdata();
            $table = "<table style=' color:#408c88;  font-family: 'Montserrat', sans-serif; border-collapse: collapse;width: 100%;'>";
            $table .= "<tr><th style='padding: 20px;'>ID</th><th>NGO NAME</th><th>MAIL</th></tr>";
            
            foreach ($recordset as $row) {
                $table .= "<tr>";
                $table .= "<td>" . $row[0] . "</td>";
                $table .= "<td>" . $row[3] . "</td>";
                $table .= "<td>" . $row[1] . "</td>";
                // $table .= "<td>" . $row[2] . "</td>";
               
              
                $table .= "<td><a href='admin_service_dashboard.php?viewid=" . $row[0] . "'></a></td>";
                $table .= "</tr>";
            }
            
            $table .= "</table>";
            
            echo $table;
            ?>

            </div>
            </div>

          
            
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