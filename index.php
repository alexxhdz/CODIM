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
        </span>
        <div class="containt1">
            <div class="contenido">
                <div class="row">
                    <div class="col">
                        <div class="cita">
                            <center>
                                <div class="imgCita">
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
            <!-- ------------------------------------------------------------------------------------------------------------------------- -->

            <!-- Sección servicios -->
            <span id="servicios" class="secciones">
                <h1 class="titles"><span class="txtGradial">Servi</span>cios</h1>
            </span>
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
                <!-- -------------------------------------------------------------------------------------------------------------------- -->

                <!-- Sección Portafolio -->
                <span id="portafolio" class="secciones">
                    <h1 class="titles">Porta<span class="txtGradial">folio</span></h1>
                </span>
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
                                        <a href="https://amecorporation.pruebatic.com/" target="_blank" class="stretched-link"></a>
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
                        <!-- ----------------------------------------------------------------------------------------------------------------- -->

                        <!-- Sección Proceso -->
                        <span id="proceso" class="secciones">
                            <h1 class="titles">Proceso de <span class="txtGradial">trabajo</span></h1>
                        </span>
                        <div id="proceso" class="proceso"></div>
                    </div>
                    <!-- ------------------------------------------------------------------------------------------------------------------ -->

                    <!-- Sección Contacto -->
                    <span id="contacto" class="secciones">
                        <h1 class="titles"><span class="txtGradial">Con</span>tacto</h1>
                    </span>
                    <div class="containt2">
                        <div class="contenido">
                            <div class="row">
                                <div class="col" id="forms">
                                    <form id="formulario" class="" method="post" action="">
                                        <input type="text" class="form-control" id="name" placeholder="Nombre" name="name">

                                        <input type="text" class="form-control" id="lastname" placeholder="Apellido" name="lastname">

                                        <select class="form-select">
                                            <option disabled selected> Servicios </option>
                                            <option>Diseño web</option>
                                            <option>Desarrollo de páginas web</option>
                                            <option>Desarrollo de aplicaciones web</option>
                                            <option>Consultoría</option>
                                            <option>Mantenimiento</option>
                                        </select>

                                        <input type="email" class="form-control" id="email" placeholder="Correo electrónico" name="email">

                                        <textarea placeholder="Cuéntanos de tu proyecto"></textarea>

                                        <button type="submit" class="btn btns">Enviar consulta</button>
                                    </form>
                                </div>

                                <div class="col">
                                    <div id="imgContacto">
                                    <img class="contacto" src="resources/IMG/codigo.jpg">
                                    </div>
                                </div>

                            </div>

                            <div class="row" id="integrantes">
                                <div class="col">
                                    <div class="avatar p-4">
                                        <img class="perfil" src="resources/IMG/Brandon Guerra.png">
                                        <a class="btn btns" href="AboutMe.php">Brandon</a>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="avatar p-4">
                                        <img class="perfil" src="resources/IMG/Brandon Guerra.png">
                                        <a class="btn btns" href="AboutMe.php">Brandon</a>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="avatar p-4">
                                        <img class="perfil" src="resources/IMG/Brandon Guerra.png">
                                        <a class="btn btns" href="AboutMe.php">Brandon</a>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="avatar p-4">
                                        <img class="perfil" src="resources/IMG/Brandon Guerra.png">
                                        <a class="btn btns" href="AboutMe.php">Brandon</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ------------------------------------------------------------------------------------------------------------------- -->

                </div>
            </div>
        </div>

        <!-- Fin de Secciones -->
    </div>


    <footer class="p-4">
        <div class="row pie">
            <div class="logodiv col">
                <a href="#"><img id="logo" src="resources/IMG/2.png"></a>
            </div>

            <div class="col redes">
                <a href="" target="_blank"><img id="icons" src="resources/ICONS/Instagram.svg"></a>

                <a href="" target="_blank"><img id="icons" src="resources/ICONS/Facebook.svg"></a>

                <a href="" target="_blank"><img id="icons" src="resources/ICONS/Whatsapp.svg"></a>

                <a href="" target="_blank"><img id="icons" src="resources/ICONS/Tiktok.svg"></a>
            </div>

            <div class="col sobreTuProyecto">
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