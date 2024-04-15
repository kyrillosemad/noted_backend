<?php

include("../connect.php");

$title=$_POST['title'];
$body=$_POST['body'];
$link_id=$_POST['link_id'];
$link=$_POST['link'];
$sql = "UPDATE `links` SET `title`='$title', `body`='$body', `link`='$link' WHERE `link_id`=$link_id";
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