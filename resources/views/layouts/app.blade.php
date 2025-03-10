<!-- resources/views/layouts/app.blade.php (base layout) -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facundo Elbey</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: white;
            color: #000;
        }
        .navbar {
            background-color: #003366; /* Azul marino */
        }
        .navbar a {
            color: white;
        }
        .footer {
            background-color: #003366; /* Azul marino */
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        .section-header {
            color: #003366; /* Azul marino */
        }
    </style>
</head>
<body>
    @yield('content')

    <footer class="footer">
        <p>&copy; 2025 Mi Portfolio. Todos los derechos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
