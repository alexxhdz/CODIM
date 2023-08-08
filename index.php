<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once("public/views/layouts/head.php") ?>
</head>

<body class="contentScroll"> <!-- data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50" -->

    <div class="banner">
        <img src="resources/IMG/codigoMorado.jpg" alt="Fondo de la pagina">
        <div class="hero-contenido">
            <img src="resources/IMG/Home.png" alt="Foto de perfil">
            <h4>Cretividad y Optimizacion para el Desarrollo de Ideas Modernas</h4>
        </div>
    </div>


    <header>
        <nav class="navbar navbar-expand-sm navDesign">
            <button class="btn btn-outline btn-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu"><span class="fa">&#xf0c9;</span>&nbsp;Menú</button>
            <div class="container-fluid justify-content-center">
                <a class="navbar-brand logo" href=""><img src="resources/IMG/Home.png" alt="Logo"></a>
            </div>
            <div class="justify-content-end">
                <a class="contact" href="#contacto">Contáctanos</a>
            </div>
        </nav>

        <div class="offcanvas offcanvas-start offcanvas-edit" id="menu">
            <div class="offcanvas-header">
                <h1 class="offcanvas-title titulo">Menú</h1>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <p></p>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nosotros</a>
                    </li>
                    <p></p>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servicios</a>
                    </li>
                    <p></p>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Portafolio</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>




    <div id="conocenos">
        <div class="row">
            <h1>CONÓCENOS</h1>
            <div class="col-sm-6">
                <div class="container acerca">
                    <h2>Acerca de nosotros</h2>

                    <p>
                        En CODIM, estamos apasionados por el mundo digital y creemos en el poder de la tecnología para impulsar el crecimiento y el éxito de negocios y emprendimientos.
                        Somos un equipo de expertos dedicados al desarrollo web, especializados en crear aplicaciones web y páginas web a medida para empresas de todos los tamaños y sectores.
                    </p>

                    <p>
                        Nuestra misión es llevar a nuestros clientes hacia el futuro digital, proporcionando soluciones innovadoras y funcionales que les permitan alcanzar sus objetivos empresariales.
                        Trabajamos de cerca con cada cliente, comprendiendo sus necesidades y metas, para ofrecer soluciones personalizadas que marquen la diferencia en el mercado en línea.
                    </p>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="animacion">
                    <div class="boomerang"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="porque">
        <div class="row">
            <h1>¿Por qué elegirnos?</h1>
            <div class="col">
                <div class="container">
                    <div class="tab">
                        <input type="radio" name="abrir" id="acc1" />
                        <label for="acc1">
                            <h2></h2>
                            <h3>Experiencia y conocimiento:</h3>
                        </label>
                        <div class="content">
                            <p>
                                En CODIM contamos con un equipo de desarrolladores altamente
                                capacitados y con amplia experiencia en el diseño y desarrollo de
                                aplicaciones web y páginas web de alto rendimiento. Estamos al tanto
                                de las últimas tecnologías para garantizar que nuestros clientes
                                obtengan soluciones de vanguardia.
                            </p>
                        </div>
                    </div>
                    <div class="tab">
                        <input type="radio" name="abrir" id="acc2" />
                        <label for="acc2">
                            <h2></h2>
                            <h3>Diseño centrado en el usuario:</h3>
                        </label>
                        <div class="content">
                            <p>
                                En CODIM, nuestro equipo de diseño se enfoca en crear experiencias
                                atractivas e intuitivas para los usuarios. Cada detalle del diseño
                                de la aplicación web o página web se piensa para proporcionar una
                                experiencia positiva a los visitantes y mejorar las conversiones.
                            </p>
                        </div>
                    </div>
                    <div class="tab">
                        <input type="radio" name="abrir" id="acc3" />
                        <label for="acc3">
                            <h2></h2>
                            <h3>Soporte continuo:</h3>
                        </label>
                        <div class="content">
                            <p>
                                En CODIM, nuestra relación con los clientes no finaliza al concluir
                                un proyecto. Ofrecemos soporte técnico y asesoramiento continuo para
                                asegurarnos de que nuestras soluciones sigan funcionando de manera
                                óptima y se mantengan actualizadas.
                            </p>
                        </div>
                    </div>
                    <div class="tab">
                        <input type="radio" name="abrir" id="acc4" />
                        <label for="acc4">
                            <h2></h2>
                            <h3>Enfoque personalizado:</h3>
                        </label>
                        <div class="content">
                            <p>
                                Reconocemos que cada empresa es única, por lo que brindamos un
                                enfoque personalizado en cada proyecto. Trabajamos estrechamente con
                                nuestros clientes para entender sus necesidades específicas y
                                ofrecer soluciones que se ajusten perfectamente a sus objetivos
                                comerciales.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!--     <div class="presentacion">
        <h1 aria-label="Hi! I'm a developer">
            Digitaliza tu&nbsp;<span class="typewriter"></span>
        </h1>
    </div> -->

    <div id="servicios">
        <div class="row">
            <h1>SERVICIOS</h1>
            <div class="col">
                <div class="container">
                    <div id="caja1">
                        <div class="txt">
                            <h4>Primer servicio</h4>
                            <p>Texto de ejemplo de servicio web...</p>
                        </div>
                    </div>

                    <div id="caja2">
                        <div class="txt">
                            <h4>Segundo servicio</h4>
                            <p>Texto de ejemplo de servicio web...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="portafolio">

    </div>

    <div id="contacto">
        <section>
            <div class="color"></div>
            <div class="color"></div>
            <div class="color"></div>
            <div class="box">
                <div style="--i:0" class="cuadrado">
                </div>
                <div style="--i:1" class="cuadrado">
                </div>
                <div style="--i:2" class="cuadrado">
                </div>
                <div style="--i:4" class="cuadrado">
                </div>
                <div class="container">
                    <div class="form">
                        <h2>Contáctenos:</h2>
                        <form>
                            <div class="inputbox">
                                <input type="text" name="" placeholder="Nombres">
                            </div>
                            <div class="inputbox">
                                <input type="text" name="" placeholder="Apellidos">
                            </div>
                            <div class="inputbox">
                                <input type="email" name="" placeholder="Correo">
                            </div>
                            <div class="inputbox">
                                <textarea name="" id="" cols="30" rows="7" placeholder="Proyecto"></textarea>
                            </div>
                            <div class="inputbox">
                                <input type="submit" value="Enviar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <a target="_blank" href="https://wa.link/3zys2m" class="btn-whatsapp">
        <img src="resources/ICONS/Whatsapp.svg" alt="Boton a WhatsApp">
    </a>


</body>

</html>