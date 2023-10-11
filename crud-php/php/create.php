<?php
if(isset($_POST['create'])){
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
    $userdata='id = '.$cid.' &name = '.$customer_name;
    if(empty($cid)){
        header("Location:../index.php?error=Customer ID is required&$userdata");
        exit();
    }
    else if(empty($customer_name)){
        header("Location:../index.php?error=Name is Required&$userdata");
        exit();
    }
    else if(empty($customer_address)){
        header("Location:../index.php?error=Address is Required&$userdata");
        exit();
    }
    else if(empty($phone_no)){
        header("Location:../index.php?error=PhoneNumber is Required&$userdata");
        exit();
    }

    else {
        $sql = "INSERT INTO customer(cid,customer_name,customer_address,phone_no) 
               VALUES('$cid', '$customer_name','$customer_address','$phone_no')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
       	    header("Location: ../read.php?success=successfully created");
        }
        else {
            header("Location: ../index.php?error=unknown error occurred&$userdata");
        }
    }
} 
