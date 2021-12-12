<?php include("seguridad.php");?>
<!DOCTYPE html>
<!-- saved from url=(0037)http://localhost/notasya/public/login -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="jKZNt9cqMUX71kmgEkORzzkwgCbv1BFWAKGkThJs">

    <title>Laravel</title>

    <!-- Scripts -->
    <script src="login_files/app.js.descarga" defer=""></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="http://fonts.gstatic.com/">

    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet">
</head>
<body style="font-family: 'Architects Daughter', cursive;">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            <a class="navbar-brand" href="index.php">
                    NotasYa
            </a>
            <a class="nav-link" href="">Mis notas</a>
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
                        <a class="nav-link"> <?php echo $_SESSION["nombre"] ?> </a>

                        </li>
                            
                        <li class="nav-item">
                            <a class="nav-link" href="salir.php">Salir</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container" style="max-width: 1820px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center;">Tu tablero</div>

                <div class="card-body" style="background-image: url('img/tablero.jpg')!important;">
                       
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




