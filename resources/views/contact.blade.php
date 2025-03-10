<!-- resources/views/contacto.blade.php -->

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
                        <a class="nav-link text-white" href="/proyectos">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fw-bold" href="/contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sección de Contacto -->
    <div class="container mt-5 pt-5">
        <div class="text-center">
            <h1 class="section-header fw-bold" style="color: #2c3e50; font-size: 2.5rem;">Contacto</h1>
            <p class="text-muted">¿Tienes una consulta o un proyecto en mente? ¡Escríbeme!</p>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-lg-6 col-md-8">
                <div class="card shadow-sm p-4" style="border-radius: 12px;">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label fw-bold">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="Tu nombre">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" required placeholder="tucorreo@email.com">
                        </div>
                        <div class="mb-3">
                            <label for="mensaje" class="form-label fw-bold">Mensaje</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required placeholder="Escribe tu mensaje aquí"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" style="background-color: #4a6fa5; border: none;">Enviar Mensaje</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Información de Contacto -->
        <div class="text-center mt-4">
            <h4 class="fw-bold">También puedes contactarme por:</h4>
            <p class="text-muted">
                📧 <strong>Email:</strong> elbeyfacundo@gmail.com &nbsp; | &nbsp; 📍 <strong>Ubicación:</strong> CABA, Argentina &nbsp; | &nbsp; 🔗 
                <a href="http://www.linkedin.com/in/facundoelbey" target="_blank" class="text-primary fw-bold">LinkedIn: Facundo Elbey</a>
            </p>
        </div>
    </div>
@endsection
