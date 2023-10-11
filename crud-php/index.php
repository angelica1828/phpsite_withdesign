<!DOCTYPE html>
<head>
    <title>
        CREATE
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="cssfiles/style.css">
</head>
<body>
    <div class="container">
        <form action="php/create.php" method="post">
        
        <h4 class="display-4 text-center">CREATE</h4><hr><br>
        <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_GET['error']; ?>
        </div>
        <?php } ?>
        <div class="form-group">
            <label for="exampleInputcid">Customer id</label>
            <input type="id" class="form-control" id="exampleInputCustomer_ID" name="id" value="<?php if(isset($_GET['cid'])) echo $_GET['cid']; ?>" placeholder="Enter Customer ID">
        </div>
        <div class="form-group">
            <label for="exampleInputcustomer_name">Customer name</label>
            <input type="text" class="form-control" id="exampleInputCustomerName" name="name" 
            value="<?php if(isset($_GET['customer_name'])) echo $_GET['customer_name']; ?>""
            placeholder="Enter Customer Name">
        </div>
        <div class="form-group">
            <label for="exampleInputcustomer_address">Customer address</label>
            <input type="textbox" class="form-control" id="exampleInputCustomerAddress" name="address"
            value="<?php if(isset($_GET['customer_address'])) echo $_GET['customer_address']; ?>"" 
            placeholder="Enter Customer Address">
        </div>
        <div class="form-group">
            <label for="exampleInputphone_no">Phone Number</label>
            <input type="text" class="form-control" id="exampleInputPhoneNo" name="phone" 
            value="<?php if(isset($_GET['phone_no'])) echo $_GET['phone_no']; ?>""
            placeholder="Enter Phone number">
        </div>
        <button type="submit" class="btn btn-primary" name="create">Create</button>
        <a href="read.php" class="link-primary">VIEW</a>
    </div>      
</form>

</body>
</html>