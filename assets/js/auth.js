// Alternar entre formularios
document.getElementById('showRegister').addEventListener('click', function(e) {
    e.preventDefault();
    document.getElementById('loginForm').style.display = 'none';
    document.getElementById('registerForm').style.display = 'block';
});

document.getElementById('showLogin').addEventListener('click', function(e) {
    e.preventDefault();
    document.getElementById('registerForm').style.display = 'none';
    document.getElementById('loginForm').style.display = 'block';
});

// Función para limpiar formulario
function clearForm(formId) {
    document.getElementById(formId).reset();
}

// Manejar el inicio de sesión
document.getElementById('login').addEventListener('submit', function(e) {
    e.preventDefault();
    const data = {
        numero_control: document.getElementById('loginNumeroControl').value,
        password: document.getElementById('loginPassword').value
    };

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
            alert('Login exitoso');
            clearForm('login');
            // Aquí puedes redirigir al usuario a su dashboard
        } else {
            alert(data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Error al iniciar sesión');
    });
});

// Manejar el registro
document.getElementById('register').addEventListener('submit', function(e) {
    e.preventDefault();
    const data = {
        numero_control: document.getElementById('regNumeroControl').value,
        nombre: document.getElementById('regNombre').value,
        apellidos: document.getElementById('regApellidos').value,
        carrera: document.getElementById('regCarrera').value,
        password: document.getElementById('regPassword').value
    };

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
            alert('Registro exitoso');
            clearForm('register');
            // Mostrar el formulario de login después del registro exitoso
            document.getElementById('showLogin').click();
        } else {
            alert(data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Error al registrar');
    });
}); 