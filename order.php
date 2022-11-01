<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "skycode_shop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM produits";
$result = $conn->query($sql);

$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["Name_Client"];
  $tel =$_POST["phone"];
  $quantity = $_POST["quantity"];
  $State_Order = $_POST["State_Order"];
  $id = $_POST["id"];
}
$sql ="INSERT INTO `order`( `Name_Client`, `Phone_Client`, `Qte_Order`, `ID_Pro`, `State_Order`) VALUES ( '".$name."','".$tel."',".$quantity.",".$id.",1);";
if ($conn->query($sql) === TRUE) {
    header('Location: /storefront ');
    die();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>