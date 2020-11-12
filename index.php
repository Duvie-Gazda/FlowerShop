<?php
require_once "bootstrap.php";

$orders = new OrderControl;

echo "<br>";
echo "Result Object";
echo "<pre>";
$result = $orders->getOrders();
print_r($result);
echo "<br>";
echo "Array";
$resultArray = $result->fetch_assoc();
print_r($resultArray);
echo "<br>";
echo "Fetch Object";
$objects = $result->fetch_object();
foreach ($objects as $obj) {
    echo "<br>";
    print_r($obj);
}
exit();

//$connection = new DBConnection;
//$query = 'SELECT * FROM `user`';
//$query = mysqli_query($connection->connection, $query);
//$users = $query->fetch_assoc();
//echo "$users";
//print_r($users);
//print_r($query);
//exit();
//$results = $connection->fetch_from_db($query);
