<?php

include("../connect.php");

$id=$_POST['id'];

$sql="SELECT * FROM `users` WHERE `id` = '$id' ";
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