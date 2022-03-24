<?php

header("Content-type:application/json");

require_once 'example_con.php';

$userID = $_POST['userID'];

$sql = "SELECT * FROM info WHERE userID = '$userID'";

$result = mysqli_query($con, $sql);

$row = mysqli_fetch_array($result);

echo json_encode(array( "userID" => $row["userID"], "userPassword" => $row["userPassword"],"userName" => $row["userName"]));
   

mysqli_close($con);
