<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">       
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Hello, world!</title>
  </head>
  <body style="font-family: 'Architects Daughter', cursive;">
  <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    NotasYa
                </a>
              
    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                            <li class="nav-item"><a class="nav-link" href="login.php"> <?php session_start(); 
                            
                            if ($_SESSION) {
                                echo $_SESSION["nombre"];
                            }else {
                                echo "Iniciar sesión";
                            }?> </a>
 
                                    
                            </li>
                            
                            <li class="nav-item">
                                <?php
                                if ($_SESSION) {
                                    echo "<a class='nav-link' href='salir.php'>Salir</a>";
                                }else {
                                    echo "<a class='nav-link' href='register.php'>Registrarse</a>";
                                }
                                ?>
                                    </a>
                                    
                            </li>
                    </ul>
                </div>
            </div>
        </nav>
        </div>
        <section class="pt-4 pt-md-20" style="padding-top: 3rem!important;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-5 col-lg-6 order-md-2">

            <ul class="mw-md-150 mw-lg-130 mb-6 mb-md-0 aos-init aos-animate" id="nota-ul" alt="..." >
              <li id="nota-li">
                <a href="#" id="nota-a">
                  <h2 id="nota-h2">Universidad</h2>
                  <p id="nota-p">Jueves examen Fisica</p>
                </a>
              </li>
              <li id="nota-li">
                <a href="#" id="nota-a">
                  <h2 id="nota-h2">Casa</h2>
                  <p id="nota-p">Sacar basura martes</p>
                </a>
              </li>
            </ul>
             

          </div>
          <div class="col-12 col-md-7 col-lg-6 order-md-1 aos-init aos-animate" data-aos="fade-up">

            <!-- Heading -->
            <h1 class="display-3 text-center text-md-start">
              Bienvenido a <span class="text-primary">NotasYa</span>. <br>
              Anota cualquier cosa 
            </h1>

            <!-- Text -->
            <p class="lead text-center text-md-start text-muted mb-6 mb-lg-8">
              Recuerda tus ideas o deberes en unos sencillos clicks!
            </p>

            <!-- Buttons -->
            <div class="text-center text-md-start">
              <a href="app.php" class="btn btn-primary shadow lift me-1">
                Crear notas<i class="fe fe-arrow-right d-none d-md-inline ms-3"></i>
              </a>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- FEATURES -->
    <section class="py-8 py-md-11" style="padding-top: 3rem !important;">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4 aos-init aos-animate" data-aos="fade-up">

            <!-- Icon -->
            <div class="icon text-primary mb-3">
            <i class="fas fa-pencil-alt"></i><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"></path><path d="M7 3h10a4 4 0 110 8H7a4 4 0 110-8zm0 6a2 2 0 100-4 2 2 0 000 4z" fill="#335EEA"></path><path d="M7 13h10a4 4 0 110 8H7a4 4 0 110-8zm10 6a2 2 0 100-4 2 2 0 000 4z" fill="#335EEA" opacity=".3"></path></g></svg>            </div>

            <!-- Heading -->
            <h3>
              Escribe
            </h3>

            <!-- Text -->
            <p class="text-muted mb-6 mb-md-0">
            Para escribir rápidamente una idea y convertirla en un Post-it facilmente
            </p>

          </div>
          <div class="col-12 col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">

            <!-- Icon -->
            <div class="icon text-primary mb-3">
            <i class="far fa-edit"></i><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"></path><path d="M5.5 4h4A1.5 1.5 0 0111 5.5v1A1.5 1.5 0 019.5 8h-4A1.5 1.5 0 014 6.5v-1A1.5 1.5 0 015.5 4zm9 12h4a1.5 1.5 0 011.5 1.5v1a1.5 1.5 0 01-1.5 1.5h-4a1.5 1.5 0 01-1.5-1.5v-1a1.5 1.5 0 011.5-1.5z" fill="#335EEA"></path><path d="M5.5 10h4a1.5 1.5 0 011.5 1.5v7A1.5 1.5 0 019.5 20h-4A1.5 1.5 0 014 18.5v-7A1.5 1.5 0 015.5 10zm9-6h4A1.5 1.5 0 0120 5.5v7a1.5 1.5 0 01-1.5 1.5h-4a1.5 1.5 0 01-1.5-1.5v-7A1.5 1.5 0 0114.5 4z" fill="#335EEA" opacity=".3"></path></g></svg>            </div>

            <!-- Heading -->
            <h3>
              Edita
            </h3>

            <!-- Text -->
            <p class="text-muted mb-6 mb-md-0">
              Si quieres cambiar el texto de una nota ya hecha puedes hacerlo con el boton de Editar! 
            </p>

          </div>
          <div class="col-12 col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

            <!-- Icon -->
            <div class="icon text-primary mb-3">
            <i class="fas fa-trash-alt"></i><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"></path><path d="M17.272 8.685a1 1 0 111.456-1.37l4 4.25a1 1 0 010 1.37l-4 4.25a1 1 0 01-1.456-1.37l3.355-3.565-3.355-3.565zm-10.544 0L3.373 12.25l3.355 3.565a1 1 0 01-1.456 1.37l-4-4.25a1 1 0 010-1.37l4-4.25a1 1 0 011.456 1.37z" fill="#335EEA"></path><rect fill="#335EEA" opacity=".3" transform="rotate(15 12 12)" x="11" y="4" width="2" height="16" rx="1"></rect></g></svg>            </div>

            <!-- Heading -->
            <h3>
              Borra
            </h3>

            <!-- Text -->
            <p class="text-muted mb-0">
              Cuando cumplas tu Post-it y no necesites la nota puedes borrarla facilmente!
            </p>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

     
    <style>
  #nota-h2,#nota-p{
  font-size:100%;
  font-weight:normal;
}
#nota-ul,#nota-li{
  list-style:none;
}
#nota-ul{
  overflow:hidden;
  padding:3em;
}
#nota-ul #nota-li #nota-a{
  text-decoration:none;
  color:#000;
  background:#ffc;
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
<script src="https://kit.fontawesome.com/d0dc7f6b6a.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>