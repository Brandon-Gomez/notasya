<?php 
include("seguridad.php");
include("conexion.php");

    
?>
<!DOCTYPE html>
<!-- saved from url=(0037)http://localhost/notasya/public/login -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="jKZNt9cqMUX71kmgEkORzzkwgCbv1BFWAKGkThJs">

    <title>NotasYa</title>

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
            <a class="nav-link" href="crud.php">Mis notas</a>
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
        <div class="col-md-8" style="margin-top: 2rem;" >
            <div class="card"style="background-image: url('img/tablero.jpg')!important;">
                <div class="card-header" style="text-align: center; background-color:whitesmoke;">Tu tablero</div>

                <?php

                    $sql = "SELECT * FROM notas WHERE usuario_id = ". $_SESSION['id'];
                    $res = $con->query ($sql);

                    while ($nota= $res->fetch_assoc()){

                      if ($nota['prioridad']>1) {

                        if ($nota['prioridad']==2) {
                          echo "<ul id='nota-ul'>
                          <li id='nota-li'>
                          
                            <a href='#' id='nota-a' style='background-color:#0d6efd'>
                              <p id='nota-p'>{$nota['texto']}</p>
                            </a>
                          </li>";
                        } if ($nota['prioridad']==3) {
                          echo "<ul id='nota-ul'>
                        <li id='nota-li'>
                        
                          <a href='#' id='nota-a' style='background-color:#df293b'>
                            <p id='nota-p'>{$nota['texto']}</p>
                          </a>
                        </li>";
                        }

                      }
                      else {
                        echo "<ul id='nota-ul'>
                      <li id='nota-li'>
                      
                        <a href='#' id='nota-a' style='background-color:#ffc'>
                          <p id='nota-p'>{$nota['texto']}</p>
                        </a>
                      </li>";
                      }
                        
                        
                    }
                    


                ?>
                <div class="card-body" >
                       
                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        </main>
    </div>

    <style>
  #nota-h2,#nota-p{
  font-size:100%;
  font-weight:normal;
}
#nota-ul,#nota-li{
  list-style:none;
}
#nota-ul{
  padding:3em;
}
#nota-ul #nota-li #nota-a{
  text-decoration:none;
  color:#000;
  /* background:#ffc; */
  display:block;
  height:13em;
  width:13em;
  padding:1em;
  -moz-box-shadow:5px 5px 7px rgba(33,33,33,1);
  -webkit-box-shadow: 5px 5px 7px rgba(33,33,33,.7);
  box-shadow: 5px 5px 7px rgba(33,33,33,.7);
  -moz-transition:-moz-transform .15s linear;
  -o-transition:-o-transform .15s linear;
  -webkit-transition:-webkit-transform .15s linear;
}
#nota-ul #nota-li{
  margin:1em;
  float:left;
}
#nota-ul #nota-li #nota-h2{
  font-size:140%;
  font-weight:bold;
  padding-bottom:10px;
}
#nota-ul #nota-li #nota-p{
font-family: 'Architects Daughter', cursive;
  font-size:180%;
}
#nota-ul #nota-li #nota-a{
  -webkit-transform: rotate(-6deg);
  -o-transform: rotate(-6deg);
  -moz-transform:rotate(-6deg);
}
#nota-ul #nota-li:nth-child(even) #nota-a{
  -o-transform:rotate(4deg);
  -webkit-transform:rotate(4deg);
  -moz-transform:rotate(4deg);
  position:relative;
  top:5px;
  background:#cfc;
}
#nota-ul #nota-li:nth-child(3n) #nota-a{
  -o-transform:rotate(-3deg);
  -webkit-transform:rotate(-3deg);
  -moz-transform:rotate(-3deg);
  position:relative;
  top:-5px;
  background:#ccf;
}
#nota-ul #nota-li:nth-child(5n) #nota-a{
  -o-transform:rotate(5deg);
  -webkit-transform:rotate(5deg);
  -moz-transform:rotate(5deg);
  position:relative;
  top:-10px;
}
#nota-ul #nota-li #nota-a:hover,#nota-ul #nota-li #nota-a:focus{
  box-shadow:10px 10px 7px rgba(0,0,0,.7);
  -moz-box-shadow:10px 10px 7px rgba(0,0,0,.7);
  -webkit-box-shadow: 10px 10px 7px rgba(0,0,0,.7);
  -webkit-transform: scale(1.25);
  -moz-transform: scale(1.25);
  -o-transform: scale(1.25);
  position:relative;
  z-index:5;
}
ol{text-align:center;}
ol li{display:inline;padding-right:1em;}
ol li a{color:#fff;}
</style>
</body>




