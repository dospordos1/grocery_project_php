<?php
include 'dbconfig.php'; // connect to database

try {
    // Prepare SQL query to update a record (example: item with ID = 3)
    $sql = "UPDATE grocery_items 
            SET price = :price, quantity = :quantity, supplier = :supplier 
            WHERE item_id = :id";

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    // Example data to update
    $id = 3; // existing ID in your table
    $price = 9.50;
    $quantity = 120;
    $supplier = "Updated Sunny Farms Co.";

    // Bind parameters
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':quantity', $quantity);
    $stmt->bindParam(':supplier', $supplier);
    $stmt->bindParam(':id', $id);

    // Execute the update
    $stmt->execute();

    echo "✅ Record with ID $id updated successfully!";
} catch(PDOException $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>
