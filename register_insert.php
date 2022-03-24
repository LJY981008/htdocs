<?php
header("Content-type:application/json");

require_once 'example_con.php';

$createID = $_POST['createID'];
$createPassword = $_POST['createPassword'];
$createName = $_POST['createName'];

$sqlSelect = "SELECT * FROM info WHERE userID = '$createID'";
$resultSelect = mysqli_query($con, $sqlSelect);
$row = mysqli_fetch_array($resultSelect);

if($row["userID"] == $createID){
    $error = "failed";
    echo json_encode(array("userID" => $row["userID"], "createID" => "$createID"));

}
else{
    $error = "ok";
    $sqlInsert = "INSERT INTO `info` (`userID`, `userPassword`, `userName`) VALUES ('$createID', '$createPassword', '$createName')";
    $resultInsert = mysqli_query($con, $sqlInsert);

    echo json_encode(array("error"=>"$error"));
}