<?php  

include "../db_conn.php";

$sql = "SELECT * FROM customer ORDER BY cid ";
$result = mysqli_query($conn, $sql);