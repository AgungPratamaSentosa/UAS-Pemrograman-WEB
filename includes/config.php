<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'monito_db';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function formatRupiah($amount)
{
    return 'Rp ' . number_format($amount, 0, ',', '.');
}
