<?php
header("Content-type:application/json");

require_once 'example_con.php';

$key = $_POST['countKey'];

$sql = "SELECT * FROM notice WHERE keyNum = $key";

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

echo json_encode(array("noticeTitle" => $row["noticeTitle"], "userName" => $row["userID"], "noticeDate" => $row["date"]));