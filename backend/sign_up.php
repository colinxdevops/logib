<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json');

include_once "db/database.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    
    $numero_control = $data['numero_control'];
    $nombre = $data['nombre'];
    $apellidos = $data['apellidos'];
    $carrera = $data['carrera'];
    $password = password_hash($data['password'], PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO estudiantes (numero_control, nombre, apellidos, carrera, contraseña) 
            VALUES (?, ?, ?, ?, ?)";
    
    try {
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $numero_control, $nombre, $apellidos, $carrera, $password);
        
        if ($stmt->execute()) {
            echo json_encode(['status' => 'success', 'message' => 'Registro exitoso']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Error al registrar']);
        }
    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => 'Error: ' . $e->getMessage()]);
    }
    
    $stmt->close();
    $conn->close();
} 