<?php
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Number = $_POST['Number'];

$conn = new mysqli('localhost', 'root', '', 'gym');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO registration (Name, Email, Number) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $Name, $Email, $Number);
    $stmt->execute();
    echo "Submit Successfully......";
    $stmt->close();
}
$conn->close();
?>
