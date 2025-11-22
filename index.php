<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>TecnoBit Inicio</title>
</head>
<body>
    <!--Aca se manda a llamar el archivo header.php-->
    <?php 
        include('header.php');
    ?>
    <main id="banner">
        <!-- <h1>Cada componente una mejora</h1> -->
    </main>
    <section class="quienes-somos container" id="que-hacemos">
        <div class="contenido">
            <h2>Sobre Nosotros</h2>
            <p>
                 Hola, bienvenido a <strong>TECNOBIT</strong>. Somos una empresa mexicana dedicada a la venta de componentes para computadoras, 
                con el fin de ayudarte a obtener piezas de buena calidad para tus productos.
                A su vez, ofrecemos distintos cursos que pueden guiarte al momento de instalar componentes.
            </p>
            <button class="btn-vermas"><a href="quienes-somos.php">Ver más</a></button>
        </div>

        <div class="imagen">
            <img src="img/que-hacemos2.jpg" alt="Imagen empleados">
        </div>
    </section>
    <!-- <section class="container card" id="cursos-catalagos">
        <div id="card-area">
            <h1>Cursos </h1>
            <div class="wrapper">
                <div class="box-area">
                    <div class="box">
                        <img src="img/img-card1.jpg" alt="computadora">
                        <div class="overlay">
                            <h3>¿Qué ofrecemos?</h3>
                            <p>Conoce los cursos que tenemos para ti</p>
                          
                        </div>
                    </div>
                    <div class="box">
                        <img src="img/img-card2.jpg" alt="computadora">
                        <div class="overlay">
                            <h3>Catálagos</h3>
                            <p>Conoce los catálagos que tenemos para ti</p>
                            <a href="catalago.php">Ver más</a>
                        </div>
                    </div>
                    <div class="box">
                        <img src="img/img-card3.jpg" alt="computadora">
                        <div class="overlay">
                            <h3>Cursos</h3>
                            <p>Conoce los cursos que tenemos para ti</p>
                            <a href="index.php#cursos">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <section class="container card" id="cursos">
        <div id="card-area">
            <h1>Cursos </h1>
            <div class="wrapper">
                <div class="box-area">
                    <!-- <div class="box">
                        <img src="img/img-card1.jpg" alt="computadora"> -->
                        <!-- <div class="overlay">
                            <h3>¿Qué ofrecemos?</h3>
                            <p>Conoce los cursos que tenemos para ti</p>

                        </div> -->
                    <!-- </div> -->
                    <div class="box">
                        <img src="img/embalsamado.jpg" alt="computadora">
                        <div class="overlay">
                            <h3>Instalación y ensamblado</h3>
                            <a href="https://youtu.be/0zkX6nlpiSk?si=_LXxpJFH58_Ogz_W">Ver curso</a>
                        </div>
                    </div>
                    <div class="box">
                        <img src="img/mantenimiento.jpg" alt="computadora">
                        <div class="overlay">
                            <h3> Mantenimiento y Optimización</h3>
                            <a href="https://youtu.be/0zkX6nlpiSk?si=_LXxpJFH58_Ogz_W">Ver curso</a>
                        </div>
                    </div>
                    <div class="box">
                        <img src="img/em-tecnico.jpg" alt="computadora">
                        <div class="overlay">
                            <h3>Ensamblado Profesional / Técnico</h3>
                            <a href="https://youtu.be/0zkX6nlpiSk?si=_LXxpJFH58_Ogz_W">Ver curso</a>
                        </div>
                    </div>    
                    <div class="box">
                        <img src="img/img-card3.jpg" alt="computadora">
                        <div class="overlay">
                            <h3>Complemetarios</h3>
                            <a href="https://youtu.be/0zkX6nlpiSk?si=_LXxpJFH58_Ogz_W">Ver curso</a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>

    <?php
        include('footer.php');
    ?>

</body>
</html>