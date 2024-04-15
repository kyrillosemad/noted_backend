<?php

include("../connect.php");

$title=$_POST['title'];
$body=$_POST['body'];
$todo_id=$_POST['todo_id'];
$endtime=$_POST['endtime'];
$sql = "UPDATE `todo` SET `title`='$title', `body`='$body', `endtime`='$endtime' WHERE `todo_id`=$todo_id";
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