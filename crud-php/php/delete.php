<?php
if(isset($_GET['id'])){
    include "../db_conn.php";
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    $cid=validate($_GET['id']);

    $sql = "DELETE FROM customer WHERE cid=$cid";
    $result = mysqli_query($conn, $sql);
    if ($result) {
  	    header("Location: ../read.php?success=Successfully deleted");
    }
    else {
        header("Location: ../update.php?id=$cid&error=unknown error occurred&$userdata");
    }
    }

else{
    header("Location:../read.php");
}