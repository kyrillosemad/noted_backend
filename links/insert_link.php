<?php
error_reporting(0);
include("../connect.php");

$title=$_POST['title'];
$body=$_POST['body'];
$owner_id=$_POST['owner_id'];
$link=$_POST['link'];
$sql = "INSERT INTO `links`(`title`,`body`,`owner_id`,`link`) VALUES('$title', '$body', '$owner_id','$link')";
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