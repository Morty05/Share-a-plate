<?php 
// session_start();
include("db.php");

class data extends db {

    private $bookpic;
    private $bookname;
    private $bookdetail;
    private $bookaudor;
    private $bookpub;
    private $branch;
    private $bookprice;
    private $bookquantity;
    private $type;

    private $book;
    private $userselect;
    private $days;
    private $getdate;
    private $returnDate;





    function __construct() {
        // echo " constructor ";
       // echo "</br></br>";
    }

    function addnewuser($name,$pasword,$email,$type){
        $this->name=$name;
        $this->pasword=$pasword;
        $this->email=$email;
        $this->type=$type;


         $q="INSERT INTO userdata(id, email, pass, name, type)VALUES('','$email','$pasword','$name','$type')";

        if($this->connection->exec($q)) {
            header("Location:admin_service_dashboard.php?msg=New Add done");
        }

        else {
            header("Location:admin_service_dashboard.php?msg=Register Fail");
        }



    }


    function userLogin($t1, $t2) {
        $q="SELECT * FROM userdata where email='$t1' and pass='$t2'";
        $recordSet=$this->connection->query($q);
        $result=$recordSet->rowCount();
        if ($result > 0) {

            foreach($recordSet->fetchAll() as $row) {
                $logid=$row['id'];
                header("location: otheruser_dashboard.php?userlogid=$logid");
            }
        }

        else {
            header("location: index.php?msg=Invalid Credentials");
        }

    }

    function adminLogin($t1, $t2) {

        $q="SELECT * FROM admin where Email='$t1' and Pass ='$t2'";
        $recordSet=$this->connection->query($q);
        $result=$recordSet->rowCount();

        if ($result > 0) {

            foreach($recordSet->fetchAll() as $row) {
                $logid=$row['id'];
                $_SESSION["adminid"]=$logid;
                header("location: admin_service_dashboard.php");
            }
        }

        else {
            header("location: index.php?msg=Invalid Credentials");
        }

    }
    function issuebook($book, $userselect, $getdate) {
$this->book=$book;
$this->userselect=$userselect;
$this->getdate=$getdate;

$q = "SELECT * FROM food WHERE bookdetail = '$book'";
    $recordSetss = $this->connection->query($q);

$q = "SELECT * FROM userdata WHERE name = '$userselect'";
$recordSet = $this->connection->query($q);
        foreach ($recordSet->fetchAll() as $row) {
            $userid = $row['id'];
        }

        foreach ($recordSetss->fetchAll() as $row) {
            $bookid = $row['id'];
        }

        $q="INSERT INTO issuebook(id,userid,foodname,issuedate) VALUES('','$userid','$book','$getdate' )";
        if ($this->connection->exec($q)) {
            header("Location: admin_service_dashboard.php?msg=done");
        } 
        else {
            header("Location: admin_service_dashboard.php?msg=fail");
        }
   

    }


    function addbook( $bookdetail, $bookquantity, $bookaudor) {
      
        $this->bookdetail=$bookdetail;
        $this->bookaudor=$bookaudor;
        $this->bookquantity=$bookquantity;

       $q="INSERT INTO Food(id,bookdetail,bookquantity,bookaudor) VALUES('', '$bookdetail', '$bookquantity','$bookaudor')";

        if($this->connection->exec($q)) {
            header("Location:admin_service_dashboard.php?msg=done");
        }

        else {
            header("Location:admin_service_dashboard.php?msg=fail");
        }

    }

    function issuereport(){
        $q="SELECT * FROM issuebook ";
        $data=$this->connection->query($q);
        return $data;
        
    }


//     private $id;



    function getissuebook($userloginid) {

        // $newfine="";
        // $issuereturn="";
        $getdate= date("d/m/Y");
        $q="SELECT * FROM issuebook where userid='$userloginid'";
        // $recordSetss=$this->connection->query($q);


        // foreach($recordSetss->fetchAll() as $row) {
        //     $issuereturn=$row['issuereturn'];
        //     $fine=$row['fine'];
        //     $newfine= $fine;

            
        //         //  $newbookrent=$row['bookrent']+1;
        // }


        
        
     
            // $q="SELECT * FROM issuebook where userid='$userloginid'";
            $data=$this->connection->query($q);
            return $data;

        






    }
// $user_name = $_SESSION['name'];
    function getbook() {
        $q="SELECT * FROM Food";
        $data=$this->connection->query($q);
        return $data;
    }
    function getbookissue(){
        $q="SELECT * FROM food ";
        $data=$this->connection->query($q);
        return $data;
    }
    function getdonor(){
        $q="SELECT * FROM admin";
        $data=$this->connection->query($q);
        return $data;
    }

    function userdata() {
        $q="SELECT * FROM userdata ";
        $data=$this->connection->query($q);
        return $data;
    }


//     function getbookdetail($id){
//         $q="SELECT * FROM book where id ='$id'";
//         $data=$this->connection->query($q);
//         return $data;
//     }

    function userdetail($id){
        $q="SELECT * FROM userdata where id ='$id'";
        $data=$this->connection->query($q);
        return $data;
    }



    function requestbook($userid,$book){

        $q="SELECT * FROM food where bookdetail='$book'";
        $recordSetss=$this->connection->query($q);

        $q="SELECT * FROM userdata where id='$userid'";
        $recordSet=$this->connection->query($q);

        foreach($recordSet->fetchAll() as $row) {
            $username=$row['name'];
            $usertype=$row['type'];
        }

        foreach($recordSetss->fetchAll() as $row) {
            $bookname=$row['bookname'];
        }

        // if($usertype=="student"){
        //     $days=7;
        // }
        // if($usertype=="teacher"){
        //     $days=21;
        // }


        $q="INSERT INTO requestbook (id,userid,username,foodname)VALUES('','$userid','$username', '$book')";

        if($this->connection->exec($q)) {
            header("Location:otheruser_dashboard.php?userlogid=$userid");
        }

        else {
            header("Location:otheruser_dashboard.php?msg=fail");
        }

    }


//     function returnbook($id){
//         $fine="";
//         $bookava="";
//         $issuebook="";
//         $bookrentel="";

//         $q="SELECT * FROM issuebook where id='$id'";
//         $recordSet=$this->connection->query($q);

//         foreach($recordSet->fetchAll() as $row) {
//             $userid=$row['userid'];
//             $issuebook=$row['issuebook'];
//             $fine=$row['fine'];

//         }
//         if($fine==0){

//         $q="SELECT * FROM book where bookname='$issuebook'";
//         $recordSet=$this->connection->query($q);   

//         foreach($recordSet->fetchAll() as $row) {
//             $bookava=$row['bookava']+1;
//             $bookrentel=$row['bookrent']-1;
//         }
//         $q="UPDATE book SET bookava='$bookava', bookrent='$bookrentel' where bookname='$issuebook'";
//         $this->connection->exec($q);

//         $q="DELETE from issuebook where id=$id and issuebook='$issuebook' and fine='0' ";
//         if($this->connection->exec($q)){
    
//             header("Location:otheruser_dashboard.php?userlogid=$userid");
//          }
//         //  else{
//         //     header("Location:otheruser_dashboard.php?msg=fail");
//         //  }
//         }
//         // if($fine!=0){
//         //     header("Location:otheruser_dashboard.php?userlogid=$userid&msg=fine");
//         // }
       

//     }

//     function delteuserdata($id){
//         $q="DELETE from userdata where id='$id'";
//         if($this->connection->exec($q)){
    
            
//            header("Location:admin_service_dashboard.php?msg=done");
//         }
//         else{
//            header("Location:admin_service_dashboard.php?msg=fail");
//         }
//     }

    function deletebook($id){
        $q="DELETE from Food where id='$id'";
        if($this->connection->exec($q)){
           header("Location:admin_service_dashboard.php?msg=done");
        }
        else{
           header("Location:admin_service_dashboard.php?msg=fail");
        }
    }

        

        function requestbookdata(){
            $q="SELECT * FROM requestbook ";
            $data=$this->connection->query($q);
            return $data;
        }

//       // issue issuebookapprove
      function issuebookapprove($book,$userselect,$getdate,$redid){
        $this->$book= $book;
        $this->$userselect=$userselect;
        // $this->$days=$days;
        $this->$getdate=$getdate;
        // $this->$returnDate=$returnDate;
        $q="SELECT * FROM food where bookdetail='$book'";
        $recordSetss=$this->connection->query($q);
        $q="SELECT * FROM userdata where name='$userselect'";
        $recordSet=$this->connection->query($q);
        $result=$recordSet->rowCount();

        if ($result > 0) {
            foreach($recordSet->fetchAll() as $row) {
                $issueid=$row['id'];
                // $issuetype=$row['type'];

                // header("location: admin_service_dashboard.php?logid=$logid");
            }
            foreach($recordSetss->fetchAll() as $row) {
                $bookid=$row['id'];
                $bookname=$row['bookdetail'];
            }

            // $q="UPDATE book SET bookava='$newbookava', bookrent='$newbookrent' where id='$bookid'";
           

            $q="INSERT INTO issuebook (id,userid,foodname,issuedate) VALUES('', '$issueid','$book','$getdate')";

            if($this->connection->exec($q)) {

                $q="DELETE from requestbook where id='$redid'";
                $this->connection->exec($q);
                header("Location:admin_service_dashboard.php?msg=done");
            }
    
            else {
                header("Location:admin_service_dashboard.php?msg=fail");
            }
            
          
              
            
        }
        else {
            header("location: index.php?msg=Invalid Credentials");
        }
    }
    



}
