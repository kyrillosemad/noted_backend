<?php
error_reporting(0);
include("../connect.php");

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql = "INSERT INTO `users`(`username`,`email`,`password`) VALUES('$username', '$email', $password) ";
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