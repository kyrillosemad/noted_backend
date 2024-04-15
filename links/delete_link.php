<?php

include("../connect.php");


$link_id=$_POST['link_id'];
$sql = "DELETE FROM `links` WHERE `link_id` = '$link_id'";
$stmt=$con->prepare($sql);
$stmt->execute();



$count =$stmt->rowCount();
if($count>0)
{
    echo json_encode(array("status" => "success"));
}
else
{
    echo json_encode(array("status" => "failed"));
}   
?>