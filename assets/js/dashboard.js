// dashboard.js - Funcionalidades para el dashboard de Logib

document.addEventListener('DOMContentLoaded', function() {
    // Comprueba si hay una sesión activa, si no redirige al login
    checkSession();
    
    // Inicializa componentes del dashboard
    initializeDashboard();
});

/**
 * Comprueba si el usuario tiene una sesión activa
 */
function checkSession() {
    const userSession = localStorage.getItem('logib_user');
    
    if (!userSession) {
        window.location.href = 'login.php';
        return;
    }
    
    // Actualiza el UI con los datos del usuario
    const user = JSON.parse(userSession);
    updateUserUI(user);
}

/**
 * Actualiza la interfaz con los datos del usuario
 */
function updateUserUI(user) {
    // Actualiza el avatar y nombre de usuario en la barra superior
    const userAvatar = document.querySelector('div.h-8.w-8.rounded-full span');
    const userName = document.querySelector('span.ml-2.hidden.md\\:block');
    
    if (userAvatar && userName) {
        // Obtiene iniciales para el avatar
        const initials = getInitials(user.nombre, user.apellidos);
        userAvatar.textContent = initials;
        userName.textContent = `${user.nombre} ${user.apellidos}`;
    }
}

/**
 * Obtiene las iniciales de nombre y apellido
 */
function getInitials(nombre, apellidos) {
    const nombreInicial = nombre ? nombre.charAt(0) : '';
    const apellidoInicial = apellidos ? apellidos.charAt(0) : '';
    return (nombreInicial + apellidoInicial).toUpperCase();
}

/**
 * Inicializa las funcionalidades del dashboard
 */
function initializeDashboard() {
    // Configura los elementos del menú lateral
    setupSidebar();
    
    // Carga los datos del dashboard (estadísticas, tablas, etc)
    loadDashboardData();
    
    // Configura el botón de cerrar sesión
    setupLogout();
}

/**
 * Configura el menú lateral
 */
function setupSidebar() {
    const menuItems = document.querySelectorAll('.bg-indigo-800 nav ul li');
    
    menuItems.forEach(item => {
        item.addEventListener('click', function() {
            // Quita la clase activa de todos los elementos
            menuItems.forEach(i => i.classList.remove('bg-indigo-900'));
            
            // Añade la clase activa al elemento seleccionado
            this.classList.add('bg-indigo-900');
            
            // Aquí podrías cargar el contenido correspondiente
            // basado en la opción seleccionada
        });
    });
}

/**
 * Carga los datos para el dashboard desde el backend
 */
function loadDashboardData() {
    // Aquí podrías hacer llamadas AJAX para obtener datos reales
    // Por ahora usamos datos de ejemplo
    
    // Ejemplo de actualización de estadísticas
    updateStatistics({
        estudiantes: 1254,
        cursos: 42,
        graduados: 89,
        promedio: 8.7
    });
}

/**
 * Actualiza las estadísticas en el dashboard
 */
function updateStatistics(stats) {
    // En una implementación real, actualizarías los valores
    // con los datos que vengan del servidor
    console.log('Estadísticas cargadas:', stats);
}

/**
 * Configura el botón de cerrar sesión
 */
function setupLogout() {
    const logoutBtn = document.querySelector('a[href="login.php"]');
    
    if (logoutBtn) {
        logoutBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Elimina los datos de la sesión
            localStorage.removeItem('logib_user');
            
            // Redirige al login
            window.location.href = 'login.php';
        });
    }
} 