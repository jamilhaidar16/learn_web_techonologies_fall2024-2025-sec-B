<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $username = $_POST['username'];

    if (!$id || !$name || !$contact || !$username) {
        echo "All fields are required.";
        exit;
    }

    $stmt = $conn->prepare("UPDATE employees SET name = ?, contact_no = ?, username = ? WHERE id = ?");
    $stmt->bind_param("sssi", $name, $contact, $username, $id);

    if ($stmt->execute()) {
        echo "Employee updated successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

