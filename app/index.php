<?php
header("Content-Type: text/html; charset=utf-8");

$DB_HOST = getenv('DB_HOST');
$DB_USER = getenv('DB_USER');
$DB_PASS = getenv('DB_PASS');
$DB_NAME = "test";  // Оставляем статично или тоже вынесем в ConfigMap

if (!$DB_HOST || !$DB_USER || !$DB_PASS) {
    die("Ошибка: не заданы переменные окружения.");
}

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

echo "Успешное подключение к базе данных!";
?>
