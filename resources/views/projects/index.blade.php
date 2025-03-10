<!-- resources/views/proyectos.blade.php -->

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
                        <a class="nav-link text-white" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fw-bold" href="/proyectos">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sección de Proyectos -->
    <div class="container mt-5 pt-5">
        <div class="text-center">
            <h1 class="section-header fw-bold" style="color: #2c3e50; font-size: 2.5rem;">Mis Proyectos</h1>
            <p class="text-muted">Aquí encontrarás algunos de los proyectos en los que he trabajado.</p>
        </div>

        <div class="row mt-4">
            <!-- Proyecto 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card project-card shadow-sm">
                    <img src="{{ asset('img/proyecto1.jpg') }}" class="card-img-top" alt="Proyecto 1">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Sistema de Tickets</h5>
                        <p class="card-text text-muted">Diseño e implementación de un sistema para gestionar y priorizar solicitudes en empresas, con métricas y KPIs.</p>
                        <a href="#" class="btn btn-primary">Ver Proyecto</a>
                    </div>
                </div>
            </div>

            <!-- Proyecto 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card project-card shadow-sm">
                    <img src="{{ asset('img/proyecto2.jpg') }}" class="card-img-top" alt="Proyecto 2">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Reserva de Salas</h5>
                        <p class="card-text text-muted">Sistema centralizado para gestionar reservas en múltiples sedes, con un calendario intuitivo y eficiente.</p>
                        <a href="#" class="btn btn-primary">Ver Proyecto</a>
                    </div>
                </div>
            </div>

            <!-- Proyecto 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card project-card shadow-sm">
                    <img src="{{ asset('img/proyecto3.jpg') }}" class="card-img-top" alt="Proyecto 3">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Proyecto 3</h5>
                        <p class="card-text text-muted">Sistema para uso de tecnologías y microservicios.</p>
                        <a href="#" class="btn btn-primary">Ver Proyecto</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <p class="text-muted">
                📧 <strong>Email:</strong> elbeyfacundo@gmail.com &nbsp; | &nbsp; 📍 <strong>Ubicación:</strong> CABA, Argentina &nbsp; | &nbsp; 🔗 
                <a href="http://www.linkedin.com/in/facundoelbey" target="_blank" class="text-primary fw-bold">LinkedIn: Facundo Elbey</a>
            </p>
        </div>
    </div>

    <!-- Estilos para efectos de hover -->
    <style>
        .project-card {
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease-in-out;
        }

        .project-card img {
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
            transition: transform 0.3s ease-in-out;
        }

        .project-card:hover {
            transform: scale(1.05);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
        }

        .project-card:hover img {
            transform: scale(1.1);
        }

        .btn-primary {
            background-color: #4a6fa5;
            border: none;
            transition: all 0.3s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #3a5d84;
            transform: translateY(-3px);
        }
    </style>
@endsection
