<?php
// Database Configuration
define('DB_HOST', 'localhost');      // Database host (usually localhost)
define('DB_USER', 'root');           // Database username (default for XAMPP is root)
define('DB_PASS', '');               // Database password (default for XAMPP is blank)
define('DB_NAME', 'myprofile_db');   // Database name (create this in phpMyAdmin)

// Create database connection
try {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    // Check connection
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
    
    // Optional: Set charset to ensure proper character encoding
    $conn->set_charset("utf8mb4");
    
} catch (Exception $e) {
    // You might want to handle this differently in production
    echo "Database connection error: " . $e->getMessage();
    exit;
}
?>