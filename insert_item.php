<?php
include 'dbconfig.php'; // connect to database

try {
    // Prepare SQL query for inserting a new grocery item
    $sql = "INSERT INTO grocery_items (item_name, category, quantity, price, supplier, expiration_date) 
            VALUES (:item_name, :category, :quantity, :price, :supplier, :expiration_date)";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // Bind parameters with sample data
    $stmt->bindParam(':item_name', $item_name);
    $stmt->bindParam(':category', $category);
    $stmt->bindParam(':quantity', $quantity);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':supplier', $supplier);
    $stmt->bindParam(':expiration_date', $expiration_date);

    // Sample data to insert
    $item_name = "Butter";
    $category = "Dairy";
    $quantity = 20;
    $price = 120.50;
    $supplier = "CreamyGoods Inc.";
    $expiration_date = "2025-12-30";

    // Execute the query
    $stmt->execute();

    echo "✅ New record inserted successfully!";
} catch(PDOException $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>
