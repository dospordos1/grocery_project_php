<?php
include 'dbconfig.php'; // connect to database

try {
    // Prepare SQL query to get one record (example: item with ID = 1)
    $stmt = $conn->prepare("SELECT * FROM grocery_items WHERE item_id = :id");

    $id = 2; // set an existing ID
    $stmt->bindParam(':id', $id);

    $stmt->execute();

    // Fetch only one record
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    echo "<h3>Single Grocery Item (using fetch)</h3>";

    echo "<pre>";
    print_r($row);
    echo "</pre>";

} catch(PDOException $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>
