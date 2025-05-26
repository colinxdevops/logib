// auth.js - Script para el manejo de autenticación en Logib

document.addEventListener('DOMContentLoaded', function() {
    // Mostrar/ocultar formularios
    const showRegister = document.getElementById('showRegister');
    const showLogin = document.getElementById('showLogin');
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');

    if (showRegister) {
        showRegister.addEventListener('click', function(e) {
            e.preventDefault();
            loginForm.style.display = 'none';
            registerForm.style.display = 'block';
        });
    }

    if (showLogin) {
        showLogin.addEventListener('click', function(e) {
            e.preventDefault();
            registerForm.style.display = 'none';
            loginForm.style.display = 'block';
        });
    }

    // Manejo de login
    const login = document.getElementById('login');
    if (login) {
        login.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const numeroControl = document.getElementById('loginNumeroControl').value;
            const password = document.getElementById('loginPassword').value;
            
            // Datos para enviar al servidor
            const data = {
                numero_control: numeroControl,
                password: password
            };
            
            // Llamada al servidor
            fetch('backend/sign_in.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    // Guarda los datos del usuario en localStorage
                    localStorage.setItem('logib_user', JSON.stringify(data.user));
                    
                    // Redirige al dashboard
                    window.location.href = 'dashboard.php';
                } else {
                    alert('Error: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error de conexión');
            });
        });
    }

    // Manejo de registro
    const register = document.getElementById('register');
    if (register) {
        register.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const numeroControl = document.getElementById('regNumeroControl').value;
            const nombre = document.getElementById('regNombre').value;
            const apellidos = document.getElementById('regApellidos').value;
            const carrera = document.getElementById('regCarrera').value;
            const password = document.getElementById('regPassword').value;
            
            // Datos para enviar al servidor
            const data = {
                numero_control: numeroControl,
                nombre: nombre,
                apellidos: apellidos,
                carrera: carrera,
                password: password
            };
            
            // Llamada al servidor
            fetch('backend/sign_up.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    alert('Registro exitoso. Inicie sesión.');
                    
                    // Mostrar formulario de login
                    registerForm.style.display = 'none';
                    loginForm.style.display = 'block';
                    
                    // Limpiar formulario
                    register.reset();
                } else {
                    alert('Error: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error de conexión');
            });
        });
    }
}); 