<?php
include("data_class.php");

$bookdetail=$_POST['bookdetail'];
$bookquantity=$_POST['bookquantity'];
$bookaudor=$_POST['bookaudor'];
 
$obj=new data();
$obj->setconnection();
$obj->addbook($bookdetail, $bookquantity, $bookaudor);

?>
<style>
    body{
        font-family: 'Montserrat', sans-serif;
    }
</style>