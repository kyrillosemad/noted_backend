<?php

include("../connect.php");

$title=$_POST['title'];
$body=$_POST['body'];
$note_id=$_POST['note_id'];
$sql = "UPDATE `notes` SET `title`='$title', `body`='$body' WHERE `note_id`=$note_id";
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