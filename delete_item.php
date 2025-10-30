<?php
include 'dbconfig.php'; // connect to database

try {
    // Prepare SQL query to delete one record (example: item with ID = 4)
    $sql = "DELETE FROM grocery_items WHERE item_id = :id";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // Bind the ID parameter
    $id = 4; // Change this to the ID of the item you want to delete
    $stmt->bindParam(':id', $id);

    // Execute the delete query
    $stmt->execute();

    echo "🗑️ Record with ID $id deleted successfully!";
} catch(PDOException $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>
