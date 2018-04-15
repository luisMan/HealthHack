<?php
include_once __DIR__ .'/function.php';


 if(isset($_POST['reading']))
 {
   
     $object->getPatient_reading_data();

 }else{
 	echo "not reading";
 }



?>