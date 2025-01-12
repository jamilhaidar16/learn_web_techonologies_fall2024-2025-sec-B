<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

    if (!$name || !$contact || !$username || !$password) {
        echo "All fields are required.";
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO employees (name, contact_no, username, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $contact, $username, $password);

    if ($stmt->execute()) {
        echo "Employee registered successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
