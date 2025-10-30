<?php
include 'dbconfig.php'; // Connect to the database

try {
    // Fetch all records from grocery_items table
    $sql = "SELECT * FROM grocery_items";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Fetch all records as associative array
    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Grocery Items Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background-color: #f9f9f9;
        }
        table {
            border-collapse: collapse;
            width: 90%;
            margin: auto;
            background-color: white;
        }
        th, td {
            border: 1px solid #ccc;
            text-align: center;
            padding: 10px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h2>🛒 Grocery Items List</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Item Name</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Supplier</th>
            <th>Expiration Date</th>
        </tr>

        <?php if (!empty($items)): ?>
            <?php foreach ($items as $item): ?>
                <tr>
                    <td><?= $item['item_id'] ?></td>
                    <td><?= $item['item_name'] ?></td>
                    <td><?= $item['category'] ?></td>
                    <td><?= $item['quantity'] ?></td>
                    <td><?= $item['price'] ?></td>
                    <td><?= $item['supplier'] ?></td>
                    <td><?= $item['expiration_date'] ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="7">No grocery items found.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>
