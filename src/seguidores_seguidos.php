<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Seguidores/seguidos</title>

        <link rel="icon" type="image/png" href="../img/Logo.png"/>

        <!-- Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/webmusic.css" rel="stylesheet">

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../js/bootstrap.min.js"></script>
    </head>
    <body>

        <div id="container-principal">
           <!-- Barra superior de la página -->
           <?php
             require_once("../php/navbar.php");
             navbar();
           ?>
           <!-- Fin barra superior -->

            <!--Contenedor que cambiara la palabra de seguidores y seguidos en funcion de lo que se busque en la pagina (esto se hara mas adelante)-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 col-md-push-1">
                        <h1> Seguidores </h1>

                    </div>
                </div>
            </div>

            <!--Contenedor que tiene tanto la imagen de perfil del usuario como un poco de informacion-->
            <div class="container-fluid">
                <div class="separar-filas-abajo">
                    <div class="col-md-2 col-md-push-1">
                        <a href="usuario.html"><img  class="img-responsive" src="../img/FotoPerfil.jpg" alt="img" title="image"/></a>
                    </div>

                    <div class="col-md-2 col-md-push-1">
                        <div class="negrita">
                            <p>Nombre de usuario: </p>
                            <p>Pais: </p>
                            <p>Fecha de nacimiento: </p>
                            <p>Gustos musicales: </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Linea separadora de contenido -->
            <hr class="separator">

            <!--Contenedor que tiene tanto la imagen de perfil del usuario como un poco de informacion-->
            <div class="container-fluid">
                <div class="separar-filas-abajo">
                    <div class="col-md-2 col-md-push-1">
                        <a href="usuario.html"><img  class="img-responsive" src="../img/FotoPerfil.jpg" alt="img" title="image"/></a>
                    </div>

                    <div class="col-md-2 col-md-push-1">
                        <div class="negrita">
                            <p>Nombre de usuario: </p>
                            <p>Pais: </p>
                            <p>Fecha de nacimiento: </p>
                            <p>Gustos musicales: </p>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Linea separadora de contenido -->
            <hr class="separator">

            <!--Contenedor que tiene tanto la imagen de perfil del usuario como un poco de informacion-->
            <div class="container-fluid">
                <div class="separar-filas-abajo">
                    <div class="col-md-2 col-md-push-1">
                        <a href="usuario.html"><img  class="img-responsive" src="../img/FotoPerfil.jpg" alt="img" title="image"/></a>
                    </div>

                    <div class="col-md-2 col-md-push-1">
                        <div class="negrita">
                            <p>Nombre de usuario: </p>
                            <p>Pais: </p>
                            <p>Fecha de nacimiento: </p>
                            <p>Gustos musicales: </p>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Linea separadora de contenido -->
            <hr class="separator">

            <!--Contenedor que tiene tanto la imagen de perfil del usuario como un poco de informacion-->
            <div class="container-fluid">
                <div class="separar-filas-abajo">
                    <div class="col-md-2 col-md-push-1">
                        <img  class="img-responsive" src="../img/FotoPerfil.jpg" alt="img" title="image"/>
                    </div>

                    <div class="col-md-2 col-md-push-1">
                        <div class="negrita">
                            <p>Nombre de usuario: </p>
                            <p>Pais: </p>
                            <p>Fecha de nacimiento: </p>
                            <p>Gustos musicales: </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Container que contiene el footer de la página -->
        <div class="footer-container">
            <footer class="footer-bs" id="footer">
                <div class="row">
                    <div class="margin-logo-footer col-md-2 footer-brand animated fadeInLeft">
                        <a href="index.html"><img alt="WebMusic" src="../img/Logo.png" width="180" height="180"></a>
                    </div>
                    <div class="col-md-10 footer-nav animated fadeInUp">
                        <div class="col-md-3">
                            <h4>Acerca de</h4>
                            <p>Webmusic es una página creada para el proyecto de la asignatura Aplicaciones Web, optativa del intinerario tecnologías de la información de la carrera Ingeniería Informática de la UCM.</p>
                        </div>
                        <div class="col-md-4 col-md-push-2">
                            <h4>Miembros</h4>
                            <ul class="list">
                                <li>José Ángel Garrido Montoya</li>
                                <li>Christian Gónzalez García-Muñoz</li>
                                <li>Alejandro Huertas Herrero</li>
                                <li>Héctor Valverde Bourgon</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-md-push-2">
                            <h4>Enlaces</h4>
                            <ul class="list">
                                <li><a href="#">Mapa del sitio</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Explicación diseño</a></li>
                                <li><a href="#">Guía de usuario</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div><!-- Fin container footer -->
    </body>
</html>
