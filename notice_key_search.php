<?php
header("Content-type:application/json");

require_once 'example_con.php';

$sql = "SELECT COUNT(*) as countKey FROM notice";
$result = mysqli_query($con, $sql); //키 탐색
$row = mysqli_fetch_array($result);
echo json_encode(array( "countKey" => $row["countKey"] ));