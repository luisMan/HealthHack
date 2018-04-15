<?php
include_once __DIR__ .'/function.php';


if(isset($_POST['heart_rate']))
{
$heart_rate =  $_POST['heart_rate'];
$body_temp =   $_POST['body_temp'];
$oxygen_level = $_POST['oxygen_level'];
$not_seen = $_POST['not_seen'];
$time = $_POST['time'];
$gender = $_POST['gender'];
$height = $_POST['height'];
$weight = $_POST['weight'];
 $result = $object->insert_into_sensor_reading($heart_rate,$body_temp,$oxygen_level,$not_seen,$time,$gender,$height,$weight);
}




if(isset($_POST['id']) && isset($_POST['gender']) && isset($_POST['body_temp']))
{
	$id = $_POST['id'];
    $name = $_POST['name'];
    $last = $_POST['last'];
    $age = $_POST['age'];
    $heart_rate =  $_POST['heart_rate'];
    $body_temp =   $_POST['body_temp'];
    $oxygen_level = $_POST['oxygen_level'];
    $not_seen = $_POST['not_seen'];
    $time = $_POST['time'];
    $gender = $_POST['gender'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
	$result = $object->get_from_sensor_and_send_it_to_db($id,$name,$last,$age,$heart_rate,$body_temp,$oxygen_level,$not_seen,$time,$gender,$height,$weight);

}

?>