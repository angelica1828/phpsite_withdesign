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

    $sql = "SELECT * FROM customer WHERE cid=$cid ";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) >0){
        $row=mysqli_fetch_assoc($result);
    }
    else{
        header("Location:read.php");
    }
} 
else if(isset($_POST['update'])){
    include "../db_conn.php";
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    $cid=validate($_POST['id']);
    $customer_name=validate($_POST['name']);
    $customer_address=validate($_POST['address']);
    $phone_no=validate($_POST['phone']);

    if(empty($cid)){
        header("Location:../update.php?id=$cid&error=Customer ID is required");
        exit();
    }
    else if(empty($customer_name)){
        header("Location:../update.php?id=$cid&error=Name is Required");
        exit();
    }
    else if(empty($customer_address)){
        header("Location:../update.php?id=$cid&error=Address is Required");
        exit();
    }
    else if(empty($phone_no)){
        header("Location:../update.php?id=$cid&error=PhoneNumber is Required");
        exit();
    }

    else {
        $sql = "UPDATE customer SET cid='$cid',customer_name='$customer_name',customer_address='$customer_address',phone_no='$phone_no' WHERE cid=$cid";
        $result = mysqli_query($conn, $sql);
        if ($result) {
       	    header("Location: ../read.php?success=Successfully updated");
        }
        else {
            header("Location: ../update.php?id=$cid&error=unknown error occurred&$userdata");
        }
    }
}
else{
    header("Location:read.php");
}