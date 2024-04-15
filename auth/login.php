<?php

include("../connect.php");

$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
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