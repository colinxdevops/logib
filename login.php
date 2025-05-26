<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-- Formulario de Login -->
        <div class="form-container" id="loginForm">
            <h2 class="form-title">Iniciar Sesión</h2>
            <form id="login">
                <div class="mb-3">
                    <label for="loginNumeroControl" class="form-label">Número de Control</label>
                    <input type="text" class="form-control" id="loginNumeroControl" required>
                </div>
                <div class="mb-3">
                    <label for="loginPassword" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="loginPassword" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
            </form>
            <div class="toggle-forms">
                <p>¿No tienes cuenta? <a href="#" id="showRegister">Regístrate</a></p>
            </div>
        </div>

        <!-- Formulario de Registro -->
        <div class="form-container" id="registerForm" style="display: none;">
            <h2 class="form-title">Registro</h2>
            <form id="register">
                <div class="mb-3">
                    <label for="regNumeroControl" class="form-label">Número de Control</label>
                    <input type="text" class="form-control" id="regNumeroControl" required>
                </div>
                <div class="mb-3">
                    <label for="regNombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="regNombre" required>
                </div>
                <div class="mb-3">
                    <label for="regApellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="regApellidos" required>
                </div>
                <div class="mb-3">
                    <label for="regCarrera" class="form-label">Carrera</label>
                    <input type="text" class="form-control" id="regCarrera" required>
                </div>
                <div class="mb-3">
                    <label for="regPassword" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="regPassword" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Registrarse</button>
            </form>
            <div class="toggle-forms">
                <p>¿Ya tienes cuenta? <a href="dashboard.php" id="showLogin">Iniciar Sesión</a></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/auth.js"></script>
</body>
</html> 