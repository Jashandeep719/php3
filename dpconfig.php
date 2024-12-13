<?php
$host = "localhost"; // Localhost for XAMPP
$dbname = "student_db"; // Replace with your database name
$username = "root"; // Default username for XAMPP
$password = "JaShAn@8105"; // Default password for XAMPP

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}
?>
