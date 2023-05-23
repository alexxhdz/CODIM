<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once("public/views/layouts/head.php") ?>
</head>

<body class="bg contentScroll">
    <header class="navegador">
        <script>
            $(document).ready(function() {
                $('.navegador').load('public/views/layouts/header.php');
            });
        </script>
    </header>

    <!-- Contenido -->

    <div class="tab-content">

        <div class="tab-pane container active" id="acerca">
            <div class="nosotros">
                <script>
                    $(document).ready(function() {
                        $('.nosotros').load('public/sections/acerca.php');
                    });
                </script>
            </div>
        </div>

        <div class="tab-pane container fade centerDiv" id="servicios">
            <div class="services">
                <script>
                    $(document).ready(function() {
                        $('.services').load('public/sections/services.php');
                    });
                </script>
            </div>
        </div>

        <div class="tab-pane container fade centerDiv" id="equipo">
            <div class="equipo">
                <script>
                    $(document).ready(function() {
                        $('.equipo').load('public/sections/equipo.php');
                    });
                </script>
            </div>
        </div>

        <div class="tab-pane container fade centerDiv" id="tecnologias">
            <div class="tecnologia">
                <script>
                    $(document).ready(function() {
                        $('.tecnologia').load('public/sections/tecnologias.php');
                    });
                </script>
            </div>
        </div>

        <div class="tab-pane container fade centerDiv" id="proceso">
            <div class="proceso">
                <script>
                    $(document).ready(function() {
                        $('.proceso').load('public/sections/proceso.php');
                    });
                </script>
            </div>
        </div>

        <div class="tab-pane container fade centerDiv" id="contacto">
            <div class="contacto">
                <script>
                    $(document).ready(function() {
                        $('.contacto').load('public/sections/contacto.php');
                    });
                </script>
            </div>
        </div>

    </div>


    <footer>
        <!-- Aquí puedes agregar el pie de página con los enlaces adicionales y derechos de autor -->
        <footer>Footer de la pagina web</footer>
    </footer>
</body>

</html>