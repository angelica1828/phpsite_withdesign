<?php include "php/read.php"; ?>
<!DOCTYPE html>
<head>
    <title>
        READ 
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="cssfiles/style.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <h4 class="display-4 text-center">READ</h4><hr>
            <?php if (isset($_GET['success'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_GET['success']; ?>
            </div>
            <?php } ?>
            <?php if (mysqli_num_rows($result)) { ?>
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>   
                <th scope="col">Customer ID</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $i=0;
                while($rows = mysqli_fetch_assoc($result)){ 
                    $i++;
                ?>   
                <tr>
                <th scope="row"><?=$i?></th>
                <td><?=$rows['cid']?></td>
                <td><?php echo $rows['customer_name']; ?></td>
                <td><?php echo $rows['customer_address']; ?></td>
                <td><?php echo $rows['phone_no']; ?></td>
                <td>
                <a href="update.php?id=<?=$rows['cid']?>" class="btn btn-success">Update</a>
                <a href="php/delete.php?id=<?=$rows['cid']?>" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php } ?>
            </tbody>
            </table> 
            <?php } ?>
            <div class="link-right" >
            <a href="../home.php" class="link-primary">HOME</a>
            </div>
    </div>
</form>

</body>
</html>