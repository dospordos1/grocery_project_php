<?php
// fetch_all.php
include('dbconfig.php'); // include your database connection

$sql = "SELECT * FROM grocery_items";
$stmt = $conn->prepare($sql);
$stmt->execute();

// fetch all records as associative array
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>"; 
print_r($results);  // pretty print the results
echo "</pre>";
?>
