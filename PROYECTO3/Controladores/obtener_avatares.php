<?php
session_start();
require_once '../../Modelo/conexion.php';

if (!isset($_SESSION['user_id'])) {
    echo json_encode([]);
    exit();
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM avatares WHERE usuario_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$avatares = [];
while ($row = $result->fetch_assoc()) {
    $avatares[] = $row;
}

echo json_encode($avatares);

$stmt->close();
$conn->close();
?>
