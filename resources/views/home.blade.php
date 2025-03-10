<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" style="background-color: #4a6fa5;">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white fw-bold" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/proyectos">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido de la página -->
    <div class="container mt-5 pt-5">
        <div class="text-center">
            <h1 class="section-header fw-bold" style="color: #2c3e50; font-size: 2.5rem;">Facundo Elbey</h1>
            <h3 class="text-muted">Desarrollador Web Full Stack | Especialista en BackEnd</h3>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow-sm p-4" style="border-radius: 12px;">
                    <p class="text-justify" style="line-height: 1.8; font-size: 1.1rem;">
                        🚀 <strong>Apasionado por la tecnología y la optimización de procesos</strong>, soy un Desarrollador Web Full Stack con experiencia en el diseño, 
                        desarrollo e implementación de soluciones escalables y eficientes. Especializado en <strong>PHP (Laravel, CodeIgniter), JavaScript, MySQL/MariaDB</strong>, 
                        he trabajado tanto de manera autónoma como en equipos de desarrollo, liderando proyectos clave en entornos dinámicos.
                    </p>
                    <p class="text-justify" style="line-height: 1.8; font-size: 1.1rem;">
                        🎯 Actualmente, en <strong>Trenes Argentinos Capital Humano</strong>, me encargo del <strong>mantenimiento, refactorización y optimización de aplicaciones existentes</strong>, 
                        además del <strong>diseño y gestión de bases de datos</strong>, garantizando integridad y rendimiento. He desarrollado sistemas de gestión de 
                        <strong>tickets, reservas, inventario informático, etc.</strong>, impactando en la productividad y organización de la empresa.
                    </p>
                    <p class="text-justify" style="line-height: 1.8; font-size: 1.1rem;">
                        🔹 <strong>Habilidades destacadas:</strong> Arquitectura de software, optimización de bases de datos, gestión de proyectos, depuración y resolución de errores.<br>  
                        🔹 <strong>Tecnologías clave:</strong> PHP (Laravel, CodeIgniter), JavaScript, React Native, MySQL, MariaDB, HTML, CSS, Bootstrap.<br>   
                        🔹 <strong>Idiomas:</strong> Inglés intermedio, Chino Mandarín básico.<br>
                    </p>
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
                        <a href="/proyectos" class="btn btn-primary me-2" style="background-color: #4a6fa5; border: none;">Ver Proyectos</a>
                        <a href="/contacto" class="btn btn-outline-dark">Contacto</a>
        </div>
        <div class="text-center mt-4">
            <p class="text-muted">
                📧 <strong>Email:</strong> elbeyfacundo@gmail.com &nbsp; | &nbsp; 📍 <strong>Ubicación:</strong> CABA, Argentina &nbsp; | &nbsp; 🔗 
                <a href="http://www.linkedin.com/in/facundoelbey" target="_blank" class="text-primary fw-bold">LinkedIn: Facundo Elbey</a>
            </p>
        </div>
    </div>
@endsection
