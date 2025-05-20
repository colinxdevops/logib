-- Crear la base de datos si no existe
CREATE DATABASE IF NOT EXISTS prueba;

-- Usar la base de datos
USE prueba;

-- Crear la tabla estudiantes
CREATE TABLE IF NOT EXISTS estudiantes (
    numero_control VARCHAR(10) PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    carrera VARCHAR(100) NOT NULL,
    contraseña VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Insertar algunos datos de ejemplo
INSERT INTO estudiantes (numero_control, nombre, apellidos, carrera, contraseña) VALUES
('2024001', 'Juan', 'Pérez García', 'Ingeniería en Sistemas', 'password123'),
('2024002', 'María', 'López Rodríguez', 'Ingeniería Industrial', 'password456'),
('2024003', 'Carlos', 'Martínez Ruiz', 'Ingeniería Civil', 'password789'); 