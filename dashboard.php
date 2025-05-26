<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Logib</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome para íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="bg-indigo-700 text-white w-64 p-4 hidden md:block">
            <div class="mb-8">
                <h1 class="text-2xl font-bold mb-1">LOGIB</h1>
                <p class="text-indigo-200 text-sm">Sistema Académico</p>
            </div>
            
            <nav>
                <ul class="space-y-2">
                    <li class="bg-indigo-800 rounded p-2">
                        <a href="#" class="flex items-center">
                            <i class="fas fa-home mr-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="hover:bg-indigo-800 rounded p-2">
                        <a href="#" class="flex items-center">
                            <i class="fas fa-user-graduate mr-2"></i> Estudiantes
                        </a>
                    </li>
                    <li class="hover:bg-indigo-800 rounded p-2">
                        <a href="#" class="flex items-center">
                            <i class="fas fa-book mr-2"></i> Cursos
                        </a>
                    </li>
                    <li class="hover:bg-indigo-800 rounded p-2">
                        <a href="#" class="flex items-center">
                            <i class="fas fa-cog mr-2"></i> Configuración
                        </a>
                    </li>
                </ul>
            </nav>
            
            <div class="mt-auto pt-4 border-t border-indigo-600 absolute bottom-0 w-56 mb-4">
                <a href="login.php" class="flex items-center text-indigo-200 hover:text-white">
                    <i class="fas fa-sign-out-alt mr-2"></i> Cerrar Sesión
                </a>
            </div>
        </div>
        
        <!-- Contenido principal -->
        <div class="flex-1">
            <!-- Barra superior -->
            <header class="bg-white shadow p-4 flex justify-between items-center">
                <div class="flex items-center">
                    <button class="md:hidden mr-4 text-gray-600">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    <h2 class="text-xl font-semibold">Dashboard</h2>
                </div>
                
                <div class="flex items-center">
                    <div class="bg-indigo-600 text-white h-8 w-8 rounded-full flex items-center justify-center mr-2">
                        <span class="font-bold text-sm" id="userInitials">JP</span>
                    </div>
                    <span class="hidden md:inline" id="userName">Juan Pérez</span>
                </div>
            </header>
            
            <!-- Contenido -->
            <main class="p-4">
                <!-- Estadísticas -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                    <div class="bg-white p-4 rounded-lg shadow">
                        <div class="flex items-center">
                            <div class="bg-indigo-100 p-3 rounded-full">
                                <i class="fas fa-user-graduate text-indigo-600"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-gray-500 text-sm">Estudiantes</p>
                                <p class="text-2xl font-bold">1,254</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white p-4 rounded-lg shadow">
                        <div class="flex items-center">
                            <div class="bg-green-100 p-3 rounded-full">
                                <i class="fas fa-book text-green-600"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-gray-500 text-sm">Cursos</p>
                                <p class="text-2xl font-bold">42</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white p-4 rounded-lg shadow">
                        <div class="flex items-center">
                            <div class="bg-red-100 p-3 rounded-full">
                                <i class="fas fa-graduation-cap text-red-600"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-gray-500 text-sm">Graduados</p>
                                <p class="text-2xl font-bold">89</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white p-4 rounded-lg shadow">
                        <div class="flex items-center">
                            <div class="bg-yellow-100 p-3 rounded-full">
                                <i class="fas fa-chart-line text-yellow-600"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-gray-500 text-sm">Promedio</p>
                                <p class="text-2xl font-bold">8.7</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Tabla de estudiantes -->
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="p-4 border-b border-gray-200 flex justify-between items-center">
                        <h3 class="font-semibold">Estudiantes Destacados</h3>
                        <button class="bg-indigo-600 text-white px-4 py-2 rounded text-sm">Ver todos</button>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Estudiante</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Carrera</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Promedio</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Estado</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="h-8 w-8 rounded-full bg-indigo-600 flex items-center justify-center text-white text-sm font-bold">JP</div>
                                            <div class="ml-3">
                                                <p class="font-medium">Juan Pérez</p>
                                                <p class="text-sm text-gray-500">2024001</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">Ingeniería en Sistemas</td>
                                    <td class="px-6 py-4">9.2</td>
                                    <td class="px-6 py-4">
                                        <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Activo</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="h-8 w-8 rounded-full bg-red-600 flex items-center justify-center text-white text-sm font-bold">ML</div>
                                            <div class="ml-3">
                                                <p class="font-medium">María López</p>
                                                <p class="text-sm text-gray-500">2024002</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">Ingeniería Industrial</td>
                                    <td class="px-6 py-4">8.7</td>
                                    <td class="px-6 py-4">
                                        <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Activo</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="h-8 w-8 rounded-full bg-blue-600 flex items-center justify-center text-white text-sm font-bold">CM</div>
                                            <div class="ml-3">
                                                <p class="font-medium">Carlos Martínez</p>
                                                <p class="text-sm text-gray-500">2024003</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">Ingeniería Civil</td>
                                    <td class="px-6 py-4">9.5</td>
                                    <td class="px-6 py-4">
                                        <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Activo</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- JavaScript para mostrar/ocultar sidebar en móviles -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.querySelector('button.md\\:hidden');
            const sidebar = document.querySelector('.bg-indigo-700');
            
            menuButton.addEventListener('click', function() {
                sidebar.classList.toggle('hidden');
                sidebar.classList.toggle('absolute');
                sidebar.classList.toggle('z-10');
                sidebar.classList.toggle('h-screen');
            });
        });
    </script>
    
    <!-- JavaScript para la funcionalidad del dashboard -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Verificar si hay un usuario en sesión
            const userSession = localStorage.getItem('logib_user');
            
            if (!userSession) {
                window.location.href = 'login.php';
                return;
            }
            
            // Actualizar UI con datos del usuario
            const user = JSON.parse(userSession);
            const userInitials = document.getElementById('userInitials');
            const userName = document.getElementById('userName');
            
            if (user.nombre && user.apellidos) {
                userInitials.textContent = (user.nombre.charAt(0) + user.apellidos.charAt(0)).toUpperCase();
                userName.textContent = user.nombre + ' ' + user.apellidos;
            }
            
            // Configurar cierre de sesión
            const logoutBtn = document.querySelector('a[href="login.php"]');
            logoutBtn.addEventListener('click', function(e) {
                e.preventDefault();
                localStorage.removeItem('logib_user');
                window.location.href = 'login.php';
            });
        });
    </script>
</body>
</html>