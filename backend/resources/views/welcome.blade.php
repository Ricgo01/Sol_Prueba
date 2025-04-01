<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App de Prueba</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold text-center">Bienvenido a la App de Prueba</h1>
        <p class="text-center mt-4">Versión de la base de datos: {{ $dbVersion }}</p>
        <!-- Punto de montaje para Vue -->
        <div id="app"></div>
    </div>
</body>
</html>

