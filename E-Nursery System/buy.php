<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "youtube";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST["name"];
$number = $_POST["number"];
$address = $_POST["address"];
$pin = $_POST["pin"];
$type = $_POST["type"];
$price = $_POST["price"];
$quantity = $_POST["quantity"];

$sql = "INSERT INTO register (name, number, address, pin, type, price, quantity)
VALUES ('$name', '$number', '$address', '$pin', '$type', '$price', '$quantity')";

if (mysqli_query($conn, $sql)) {
    echo
    
    header('location:order.html');

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
