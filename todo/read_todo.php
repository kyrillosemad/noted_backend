<?php

include("../connect.php");

$owner_id=$_POST['owner_id'];
$sql="SELECT * FROM `todo` WHERE `owner_id` = $owner_id";
$stmt=$con->prepare($sql);
$stmt->execute();
$users =$stmt->fetchAll(PDO::FETCH_ASSOC);



$count =$stmt->rowCount();

if($count>0)
{
    echo json_encode(array("status" => "success","data" => $users));
}
else
{
    echo json_encode(array("status" => "failed"));
}

?>