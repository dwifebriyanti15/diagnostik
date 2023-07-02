<?php
// Database connection parameters
$host = 'localhost';
$dbname = 'userdb';
$username = 'root';
$password = '';

// koneksi KE DATABASE using PDO
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Yahhh..kamu gagal terhubung ke server nih :(' . $e->getMessage());
}

// Connect to MySQL
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check if the connection was successful
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

// Connection successful, continue with your website's logic...

// Close the database connection when you're done
mysqli_close($conn);
?>
