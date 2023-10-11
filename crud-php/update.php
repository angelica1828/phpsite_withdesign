<?php include "php/update.php"; ?>
<!DOCTYPE html>
<head>
    <title>
        UPDATE
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="cssfiles/style.css">
</head>
<body>
    <div class="container">
        <form action="php/update.php" method="post">
        
        <h4 class="display-4 text-center">UPDATE</h4><hr><br>
        <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_GET['error']; ?>
        </div>
        <?php } ?>
        <div class="form-group">
            <label for="exampleInputcid">Customer id</label>
            <input type="id" class="form-control" id="exampleInputCustomer_ID" name="id" 
            value="<?=$row['cid'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputcustomer_name">Customer name</label>
            <input type="text" class="form-control" id="exampleInputCustomerName" name="name" 
            value="<?=$row['customer_name'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputcustomer_address">Customer address</label>
            <input type="textbox" class="form-control" id="exampleInputCustomerAddress" name="address"
            value="<?=$row['customer_address'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputphone_no">Phone Number</label>
            <input type="text" class="form-control" id="exampleInputPhoneNo" name="phone" 
            value="<?=$row['phone_no']  ?>">
        </div>
        <input type="text" name="id" value="<?=$row['cid']?>" hidden>
        <button type="submit" class="btn btn-primary" name="update">UPDATE</button>
        <a href="read.php" class="link-primary">VIEW</a>
    </div>      
</form>

</body>
</html>