<?php include '../sql_connect.php'; ?>

<?php 
    $customer_id = $_GET['customer_id'];
    $customer_name = $_GET['customer_name'];
    $customer_phone = $_GET['customer_phone'];
    $salesman_id = $_GET['salesman_id'];
    $sql = "INSERT INTO `customer` (`cid`, `cname`, `cphone`, `csid`) VALUES ('$customer_id', '$customer_name', '$customer_phone', '$salesman_id')";

    if ($conn = mysqli_query($global_link, $sql)){
        header("Location:../list_customers.php");
    }

?>