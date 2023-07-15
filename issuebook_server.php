<?php

include("data_class.php");

$book=$_POST['book'];
$userselect= $_POST['userselect'];
$getdate = date('Y-m-d');
// $days= $_POST['days'];

// $returnDate=Date('d/m/Y', strtotime('+'.$days.'days'));

$obj=new data();
$obj->setconnection();
$obj->issuebook($book,$userselect,$getdate);

?>
<style>
    body{
        font-family: 'Montserrat', sans-serif;
    }
</style>