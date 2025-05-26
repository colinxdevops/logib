<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json');

include_once "db/database.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    
    $numero_control = $data['numero_control'];
    $password = $data['password'];
    
    $sql = "SELECT * FROM estudiantes WHERE numero_control = ?";
    
    try {
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $numero_control);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['contraseña'])) {
                // Eliminar la contraseña antes de enviar los datos
                unset($user['contraseña']);
                echo json_encode([
                    'redirect' => '../dashboard.php',
                    'status' => 'success',
                    'message' => 'Login exitoso',
                    'user' => $user
                ]);
            } else {
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Contraseña incorrecta'
                ]);
            }
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => 'Usuario no encontrado'
            ]);
        }
    } catch (Exception $e) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Error: ' . $e->getMessage()
        ]);
    }
    
    $stmt->close();
    $conn->close();
} 