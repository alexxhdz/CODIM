<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once("public/views/layouts/head.php") ?>
</head>

<body class="contentScroll" data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">

    <div class="banner">
        <img src="resources/IMG/codigoMorado.jpg" alt="Fondo de la pagina">
        <div class="hero-contenido">
            <img src="resources/IMG/Logo.png" alt="Foto de perfil">
            <h4>Cretividad y Optimizacion para el Desarrollo de Ideas Modernas</h4>
        </div>
    </div>


    <header>
        <nav class="navbar navbar-expand-md navDesign justify-content-center ">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a id="nav" class="nav-link" href="#acerca">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a id="nav" class="nav-link" href="#servicios">Servicios</a>
                </li>
                <li class="nav-item">
                    <a id="nav" class="nav-link" href="#portafolio">Portafolio</a>
                </li>
                <li class="nav-item">
                    <a id="nav" class="nav-link" href="#proceso">Proceso de trabajo</a>
                </li>
                <li class="nav-item">
                    <a id="nav" class="nav-link" href="#contacto">Contacto</a>
                </li>
            </ul>
        </nav>
    </header>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- Se moverán los contenidos a archivos externos para mayor organización y fácil lectura del código. -->

    <div>
        <!-- Sección Acerca de -->
        <span id="acerca" class="secciones">
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
                                CODIM es una empresa líder en el campo del desarrollo web, dedicada a proporcionar soluciones innovadoras y 
                                de alta calidad a sus clientes.
                            </p>
                            <p>
                                Nuestro equipo de expertos en desarrollo web está compuesto por profesionales altamente capacitados y con 
                                amplia experiencia en diseño y programación.
                            </p>
                        </div>
                    </div>
                </div>
        </span>
        <!-- ------------------------------------------------------------------------------------------------------------------------- -->

        <!-- Sección servicios -->
        <span id="servicios" class="secciones">
            <h1 class="titles"><span class="txtGradial">Servi</span>cios</h1>
            <div class="containt2">
                <div class="contenido">
                    <div class="row">
                        <div class="col servicio">
                            <div id="imagen">
                                <img src="resources/IMG/codmo.jpg">
                            </div>
                            <div id="texto">
                                <h4>Diseño web</h4>
                                <p>
                                    El servicio de diseño web ofrecido por CODIM se enfoca en crear interfaces atractivas, intuitivas y 
                                    visualmente impactantes para sitios web.
                                </p>
                            </div>
                        </div>

                        <div class="col servicio">
                            <div id="imagen">
                                <img src="resources/IMG/codmo.jpg">
                            </div>
                            <div id="texto">
                                <h4>Apps web</h4>
                                <p>
                                    El servicio de desarrollo de aplicaciones web ofrecido por CODIM está diseñado para crear 
                                    soluciones personalizadas y potentes que satisfagan las necesidades específicas de tu negocio.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col servicio">
                            <div id="imagen">
                                <img src="resources/IMG/codmo.jpg">
                            </div>
                            <div id="texto">
                                <h4>Páginas web</h4>
                                <p>
                                    El servicio de creación de páginas web proporcionado por CODIM es una solución integral 
                                    para establecer una presencia en línea efectiva y profesional.
                                </p>
                            </div>
                        </div>

                        <div class="col servicio">
                            <div id="imagen">
                                <img src="resources/IMG/codmo.jpg">
                            </div>
                            <div id="texto">
                                <h4>Mantenimiento</h4>
                                <p>
                                    El servicio de mantenimiento web ofrecido por CODIM está diseñado para garantizar que tu sitio web 
                                    funcione de manera óptima y esté actualizado en todo momento.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </span>
            <!-- -------------------------------------------------------------------------------------------------------------------- -->

            <!-- Sección Portafolio -->
            <span id="portafolio" class="secciones">
                <h1 class="titles">Porta<span class="txtGradial">folio</span></h1>
                <div class="containt1">
                    <div class="contenido">
                        <div class="proyectos row">

                            <div class="col">
                                <div class="card cardProyectos">
                                    <img class="card-img-top" src="resources/IMG/ejemploPort.jpg" alt="Card image">
                                    <div class="card-img-overlay card-img-overlay-edit p-4">
                                        <h4 class="card-title">Sistema de Votación Remota</h4>
                                        <a href="#" class="stretched-link"></a>
                                        <p class="card-text">
                                            La votación remota para Nuevo León es un sistema que permite a los ciudadanos
                                            ejercer su derecho al voto de manera electrónica y desde la comodidad de sus hogares.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card cardProyectos">
                                    <img class="card-img-top" src="resources/IMG/ejemploPort.jpg" alt="Card image">
                                    <div class="card-img-overlay card-img-overlay-edit p-4">
                                        <h4 class="card-title">Ame Corporation</h4>
                                        <a href="#" class="stretched-link"></a>
                                        <p class="card-text">
                                            Ame Corporation es una página de servicios multimedia que ofrece soluciones creativas y 
                                            personalizadaspara satisfacer tus necesidades en el ámbito de los medios digitales. 
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card cardProyectos">
                                    <img class="card-img-top" src="resources/IMG/ejemploPort.jpg" alt="Card image">
                                    <div class="card-img-overlay card-img-overlay-edit p-4">
                                        <h4 class="card-title">MarketUP</h4>
                                        <a href="#" class="stretched-link"></a>
                                        <p class="card-text">
                                            MarketUP es una página de marketing dedicada a ofrecer soluciones estratégicas y efectivas
                                            para impulsar el crecimiento y el éxito de tu negocio.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
            </span>
            <!-- ----------------------------------------------------------------------------------------------------------------- -->

            <!-- Sección Proceso -->
            <span id="proceso" class="secciones">
                    <h1 class="titles">Proceso de <span class="txtGradial">trabajo</span></h1>
                    <div id="proceso" class="proceso"></div>
                </div>
            </span>
            <!-- ------------------------------------------------------------------------------------------------------------------ -->

            <!-- Sección Contacto -->
            <span id="contacto" class="secciones">
                <h1 class="titles"><span class="txtGradial">Con</span>tacto</h1>
                <div class="containt2">
                    <div class="contenido">

                    </div>
                </div>
            </span>
            <!-- ------------------------------------------------------------------------------------------------------------------- -->

            </div>
        </div>
    </div>

    <!-- Fin de Secciones -->
    </div>


    <footer>
        <div class="pie">
            <a href="#"><img id="logo" src="resources/IMG/2.png"></a>

            <div class="redes">
                <a href=""><img id="icons" src="resources/ICONS/Instagram.svg"></a>

                <a href=""><img id="icons" src="resources/ICONS/Facebook.svg"></a>

                <a href=""><img id="icons" src="resources/ICONS/Whatsapp.svg"></a>

                <a href=""><img id="icons" src="resources/ICONS/Tiktok.svg"></a>
            </div>

            <div class="sobreTuProyecto">
                <h3>Cuéntanos acerca de tu proyecto</h3>
                <form method="post" action="">
                    <textarea id="proyecto" required></textarea>
                    <br>
                    <button type="submit" class="btn btns">Enviar</button>
                </form>
            </div>
        </div>
    </footer>
</body>

</html>