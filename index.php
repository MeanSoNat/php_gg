<?php include 'sql_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <form action="service/insert.php" method="get">
        <label for="username">Name:</label> <input type="text" name="customer_name"> <br>   
        <label for="customer_id">CustomerID:</label> <input type="text" name="customer_id"> <br>
        <label for="phone">Phone:</label> <input type="text" name="customer_phone"> <br>
        <label for="sales_man">Salesman</label>
        <select name="salesman_id">
        <?php 
        $sql_salesman = "SELECT * FROM `salesman`";
        if ($conn = mysqli_query($global_link, $sql_salesman)) {
            foreach ($conn as $data) { ?>
                <option value="<?php echo $data['sid']; ?>"><?php echo $data["sname"];?></option>
        <?php
            }
        } else echo "Cannot connect to database or cannot found table.";
        ?>
        </select>
        <br>
        <button type="submit">Submit</button>
    </form>
    <a href="list_customers.php">See List</a>
    <a href="cart.php">Shop</a>
</body>
</html>