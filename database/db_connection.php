<?php
// Define database connection parameters
$dbFile = "C:\\Users\\Stefan\\Documents\\repositories\\Info2_Database\\Info2_FT_Sim_db.accdb";
$driver = "odbc";

try {
    // Create a PDO object representing the database connection
    $pdo = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb, *.accdb)}; DBQ=$dbFile");

    // Set PDO attributes (optional)
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Execute a simple query to test the connection
    $stmt = $pdo->query("SELECT 1");

    // Check if the query was successful
    if ($stmt) {
        echo "Connection to the Microsoft Access database is successful!";
    } else {
        echo "Connection test failed. Unable to execute query.";
    }
} catch (PDOException $e) {
    // Handle connection errors
    echo "Connection failed: " . $e->getMessage();
}
?>

