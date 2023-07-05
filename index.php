<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once("public/views/layouts/head.php") ?>
</head>

<body class="contentScroll">

    <div class="banner">
        <img src="resources/IMG/codigoMorado.jpg" alt="Fondo de la pagina">
        <div class="hero-contenido">
            <img src="resources/IMG/CODIM.png" alt="Foto de perfil">
        </div>
    </div>


    <header>
        <nav class="navbar navbar-expand-md navDesign justify-content-center ">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a id="nav" class="nav-link" data-bs-toggle="pill" href="#acerca">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a id="nav" class="nav-link" data-bs-toggle="pill" href="#servicios">Servicios</a>
                </li>
                <li class="nav-item">
                    <a id="nav" class="nav-link" data-bs-toggle="pill" href="#equipo">Portafolio</a>
                </li>
                <li class="nav-item">
                    <a id="nav" class="nav-link" data-bs-toggle="pill" href="#proceso">Proceso de trabajo</a>
                </li>
                <li class="nav-item">
                    <a id="nav" class="nav-link" data-bs-toggle="pill" href="#contacto">Contacto</a>
                </li>
            </ul>
        </nav>
    </header>

    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- Se moverán los contenidos a archivos externos para mayor organización y fácil lectura del código. -->

    <div>
        <h1 class="titles">Acerca de COD<span class="txtGradial">IM</span></h1>
        <div class="containt1">
            <div class="contenido">
                <div class="row">
                    <div class="col">
                        <div class="avatar">
                            <center>
                                <div class="perfil">
                                    <img src="resources/IMG/codigo.jpg">
                                </div>
                            </center>
                            <a class="button btn btns">Agendar una cita</a>
                        </div>
                    </div>
                    <div class="col">
                        <h2>Sobre <span class="txtGradial">nosotros</span></h2>
                        <p>
                            Texto de ejemplo
                        </p>
                    </div>
                </div>
            </div>

            <h1 class="titles"><span class="txtGradial">Servi</span>cios</h1>
            <div class="containt2">
                <div class="contenido">

                </div>

                <h1 class="titles">Porta<span class="txtGradial">folio</span></h1>
                <div class="containt1">
                    <div class="contenido">
                        <h1 class="titles">Proceso de <span class="txtGradial">trabajo</span></h1>

                    </div>

                    <h1 class="titles"><span class="txtGradial">Con</span>tacto</h1>
                    <div class="containt2">
                        <div class="contenido">

                        </div>


                    </div>

                </div>

            </div>
        </div>
    </div>


    <!-- <footer>
        <footer>Footer de la pagina web</footer>
    </footer> -->
</body>

</html>