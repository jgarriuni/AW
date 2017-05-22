<!DOCTYPE html>
<html lang="es">
    <head>
        <noscript>
            <meta http-equiv="refresh" content="0; url=errorJS.html" />
        </noscript>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nombre usuario</title>

        <link rel="icon" type="image/png" href="../img/Logo.png"/>

        <!-- Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/webmusic.css" rel="stylesheet">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/miPerfil.js"></script>
    </head>
    <body>
        <div id="container-principal">

           <!-- Barra superior de la página -->
           <?php
             require_once("../php/navbar.php");
             navbar();
           ?>
           <!-- Fin barra superior -->

            <!-- Barra de búsqueda -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <div id="imaginary_container">
                            <div class="input-group stylish-input-group">
                                <input type="text" class="form-control"  placeholder="Buscar" >
                                <span class="input-group-addon">
                                    <a href="buscar_registrado.html" class="link-home-carousel-and-search"><span class="glyphicon glyphicon-search"></span></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Fin barra de búsqueda -->

            <div class="container-fluid">
                <div class="row">
                    <div class="fb-profile">
                        <img class="fb-image-lg" src="../img/Header.jpg" alt="Profile image example" height=400>
                        <img class="fb-image-profile thumbnail" src="../img/FotoPerfil.jpg" alt="Profile image example">
                        <div class="fb-profile-text">
                            <h1>Nombre Usuario</h1>
                        </div>
                    </div>
                </div>
            </div> <!-- /container fluid-->

            <div class="container">
                <div class="col-sm-8">
                    <div data-spy="scroll" class="tabbable-panel">
                        <div class="tabbable-line">
                            <ul class="nav nav-tabs ">
                                <li class="active">
                                    <a href="#tab_default_1" data-toggle="tab">Descripción</a>
                                </li>
                                <li>
                                    <a href="#tab_default_2" data-toggle="tab">Seguidores</a>
                                </li>
                                <li>
                                    <a href="#tab_default_3" data-toggle="tab">Seguidos</a>
                                </li>
                                <li>
                                    <a href="#tab_default_4" data-toggle="tab">Canciones</a>
                                </li>
                                <li>
                                    <a href="#tab_default_5" data-toggle="tab">Editar Perfil</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_default_1">

                                    <p>
                                        My daughter  is good looking, with pleasant personality, smart, well educated, from well cultural and  a religious family background. having respect in heart for others.
                                        would like to thanks you for visiting through my daughter;s profile.
                                        She has done PG in Human Resources after her graduation.
                                        At present working IN INSURANCE sector as Manager Training .
                                    </p>
                                    <h4>About her Family</h4>
                                    <p>
                                        About her family she belongs to a religious and a well cultural family background.
                                        Father - Retired from a Co-operate Bank as a Manager.
                                        Mother - she is a home maker.
                                        1 younger brother - works for Life Insurance n manages cluster.
                                    </p>
                                    <h4>Education </h4>
                                    <p>I have done PG in Human Resourses</p>
                                    <h4>Occupation</h4>
                                    <p>At present Working in Insurance sector</p>

                                </div>
                                <div class="tab-pane" id="tab_default_2">
                                    <div class="user-resume">
                                        <div>
                                            <img class="user-resume-img" src="../img/FotoPerfil.jpg" width="64" height="64" alt="Imagen usuario">
                                        </div>
                                        <div class="user-resume-info">
                                            <h3>Nombre usuario</h3>
                                        </div>
                                        <div class="user-resume-button">
                                            <button type="button" class="btn btn-primary pull-right" disabled>Seguir</button>
                                        </div>
                                    </div>
                                    <div class="user-resume">
                                        <div>
                                            <img class="user-resume-img" src="../img/FotoPerfil.jpg" width="64" height="64" alt="Imagen usuario">
                                        </div>
                                        <div class="user-resume-info">
                                            <h3>Nombre usuario</h3>
                                        </div>
                                        <div class="user-resume-button">
                                            <button type="button" class="btn btn-primary pull-right">Seguir</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_default_3">
                                    <div class="user-resume">
                                        <div>
                                            <img class="user-resume-img" src="../img/FotoPerfil.jpg" width="64" height="64" alt="Imagen usuario">
                                        </div>
                                        <div class="user-resume-info">
                                            <h3>Nombre usuario</h3>
                                        </div>
                                        <div class="user-resume-button">
                                            <button type="button" class="btn btn-primary pull-right">Seguir</button>
                                        </div>
                                    </div>
                                    <div class="user-resume">
                                        <div>
                                            <img class="user-resume-img" src="../img/FotoPerfil.jpg" width="64" height="64" alt="Imagen usuario">
                                        </div>
                                        <div class="user-resume-info">
                                            <h3>Nombre usuario</h3>
                                        </div>
                                        <div class="user-resume-button">
                                            <button type="button" class="btn btn-primary pull-right" disabled>Seguir</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_default_4">
                                    <div class="user-resume">
                                        <div>
                                            <img class="user-resume-img" src="../img/FotoPerfil.jpg" width="64" height="64" alt="Imagen usuario">
                                        </div>
                                        <div class="user-resume-info">
                                            <h3>Nombre canción</h3>
                                        </div>
                                        <div class="user-resume-button">
                                            <button type="button" class="btn btn-primary pull-right glyphicon glyphicon-play" data-toggle="tooltip" title="escuchar canción"></button>
                                        </div>
                                    </div>
                                    <div class="user-resume">
                                        <div>
                                            <img class="user-resume-img" src="../img/FotoPerfil.jpg" width="64" height="64" alt="Imagen usuario">
                                        </div>
                                        <div class="user-resume-info">
                                            <h3>Nombre canción</h3>
                                        </div>
                                        <div class="user-resume-button">
                                            <button type="button" class="btn btn-primary pull-right glyphicon glyphicon-play" data-toggle="tooltip" title="escuchar canción"></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_default_5">

                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Nombre:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Apellido:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Nombre de usuario:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Email:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Imagen de perfil:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="file">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Imagen de encabezado:</label>
                                            <div class="col-lg-8">
                                                <input class="form-control" type="file">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-danger btn-block">Guardar cambios</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="menu_title">
                            Gustos musicales
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12" id="panelGustos">
                                    <div class="form-group">
                                        <label>Pop</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Rock</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Hip-Hop</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Reagge</label>
                                    </div>
                                    <div class="form-group">
                                        <label>House</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Música clásica</label>
                                    </div>
                                    <button onclick="ocultarGustos()" class="btn btn-danger btn-block">Editar gustos musicales</button>
                                </div>
                                <div class="col-lg-12" id="editarGustos">
                                    <div class="form-group">
                                        <label>Pop:</label>
                                        <input class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Rock:</label>
                                        <input class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Hip-Hop:</label>
                                        <input class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Reagge:</label>
                                        <input class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>House:</label>
                                        <input class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Musica clasica:</label>
                                        <input class="form-control">
                                    </div>

                                    <button onclick="ocultarEdicionGustos()" class="btn btn-danger btn-block">Guardar</button>
                                    <button onclick="ocultarEdicionGustos()" class="btn btn-danger btn-block">Cancelar</button>
                                </div>
                            </div>
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