<?php
header("Content-type:application/json");

require_once 'example_con.php';

$sql = "SELECT last_insert_id()"
$key = mysqli_query($con, $sql); //키 탐색