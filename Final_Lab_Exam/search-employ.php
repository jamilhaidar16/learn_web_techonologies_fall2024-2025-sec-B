<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $query = $_GET['query'];

    if (!$query) {
        echo "Search query is required.";
        exit;
    }

    $stmt = $conn->prepare("SELECT * FROM employees WHERE name LIKE CONCAT('%', ?, '%')");
    $stmt->bind_param("s", $query);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<p>Name: " . $row['name'] . ", Contact: " . $row['contact_no'] . ", Username: " . $row['username'] . "</p>";
        }
    } else {
        echo "No results found.";
    }

    $stmt->close();
    $conn->close();
}
?>
