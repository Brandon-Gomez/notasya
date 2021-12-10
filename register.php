<?php
session_start();
    if (@$_SESSION["autentificado"]=="1") {
        header("location:app.php");
        exit();
    }
?>
<!DOCTYPE html>
<!-- saved from url=(0043)http://localhost/notarapida/public/register -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="N8GoLSNcDTaOX7dPsLPRq8MI2P5FawFL2kpOVGLI">

    <title>NotasYa</title>

    <!-- Scripts -->
    <script src="Laravel_files/app.js.descargar" defer=""></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="http://fonts.gstatic.com/">
    <link href="css" rel="stylesheet">

    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet">

</head>
<body data-new-gr-c-s-check-loaded="14.1001.0" data-gr-ext-installed="">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="app.php">
                    NotasYa
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                                                                                    <li class="nav-item">
                                    <a class="nav-link" href="login.php">Iniciar sesión</a>
                                </li>
                            
                                                            <li class="nav-item">
                                    <a class="nav-link">Registrarse</a>
                                </li>
                                                                        </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registrarme</div>

                <div class="card-body">
                    <form method="POST" action="control_registro.php">
                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control " name="nombre" value="" required="" autocomplete="name" autofocus="">

                                                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control " name="email" value="" required="" autocomplete="email">
                                
            
                                </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control " name="password" required="" autocomplete="new-password">

                                                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" name="register" class="btn btn-primary">
                                    Registrarse
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        </main>
    </div>

</body>
</html>