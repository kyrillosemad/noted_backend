<?php

include("../connect.php");


$todo_id=$_POST['todo_id'];
$sql = "DELETE FROM `todo` WHERE `todo_id` = '$todo_id'";
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