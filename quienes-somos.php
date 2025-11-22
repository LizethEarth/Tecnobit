<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="css/quienes-somos.css">
    <title>¿Qué hacemos y quiénes somos?</title>
</head>
<body> 
    <?php
        require('header2.php')
    ?>
    <div class="header-content">
        <div class="header-txt container">
            <h1>TECNOBIT</h1>
            <p>
                En TECNOBIT nos comprometemos con la satisfacción de cada cliente, brindando productos de calidad y promoviendo el aprendizaje tecnológico.
                También fomentamos el reciclaje y la reutilización responsable de componentes electrónicos para cuidar el medio ambiente.
            </p>
        </div>
    </div>
        <section class="que-hacemos container2" id="que-hacemos">
           <div class="imag margen">
                <img src="img/the-office.jpg" alt="The Office">
            </div>
            <div class="contenido">
                <h2>Nuestra historia</h2>
                <p>
                    TECNOBIT nació con la idea de acercar la tecnología a todos.
                        Comenzamos como un pequeño proyecto apasionado por las computadoras, 
                        y con el tiempo, fuimos creciendo hasta convertirnos en una empresa dedicada a apoyar a estudiantes, profesionales y entusiastas del hardware.
                </p>
                <p>
                    Tu satisfacción es nuestra prioridad.
                        Cada producto y curso está pensado para ofrecerte la mejor experiencia y ayudarte a crecer en el mundo de la tecnología.
                </p>
            </div>
        </section>
         <section class="mision" id="mision">
            <h3>Nuestra misión</h3>
            <div class="texto-columnas container">
                En <strong>TECNOBIT</strong>, creemos en la importancia de la innovación, la confianza y la accesibilidad tecnológica.
                Nos apasiona brindar soluciones confiables para que cada cliente pueda armar, reparar o mejorar su equipo con seguridad y conocimiento.
                Contamos con varios años de experiencia en el sector tecnológico, ofreciendo asesorías y productos de las mejores marcas.
                Nuestro objetivo es acercar la tecnología a todos, desde principiantes hasta profesionales.        
                Además de la venta de componentes, brindamos cursos prácticos en los que aprenderás a ensamblar, mantener y optimizar computadoras.
                Queremos que no solo compres piezas, sino que también entiendas cómo sacarles el máximo provecho.
            </div>
        </section>

    <section class="container card" id="cursos-catalagos">
        <div id="team-area">
            <h1>Nuestro Equipo </h1>
            <div class="wrapper-team">
                <div class="team-box-area">
                    <div class="team-box">
                        <img src="img/michael.jpg" alt="michael">
                        <div class="overlay-team">
                            <h3>Lizliz</h3>
                            <p>Diseñadora</p>
                            <!-- <a href="#">Ver más</a> -->
                        </div>
                    </div>
                    <div class="team-box">
                        <img src="img/dwigth.jpg" alt="dwight">
                        <div class="overlay-team">
                            <h3>Fabían</h3>
                            <p>QA</p>
                        </div>
                    </div>
                    <div class="team-box">
                        <img src="img/jim.jpg" alt="michael">
                        <div class="overlay-team">
                            <h3>Rubí</h3>
                            <p>Analista</p>
                            <!-- <a href="#">Ver más</a> -->
                        </div>
                    </div>
                    <div class="team-box">
                        <img src="img/pam.jpg" alt="michael">
                        <div class="overlay-team">
                            <h3>Erick</h3>
                            <p>Scrum Master</p>
                            <!-- <a href="#">Ver más</a> -->
                        </div>
                    </div> 
                    <div class="team-box">
                        <img src="img/ryan.jpg" alt="michael">
                        <div class="overlay-team">
                            <h3>Erwin</h3>
                            <p>Desarrollador</p>
                            <!-- <a href="#">Ver más</a> -->
                        </div>
                    </div>                                       
                </div>
            </div>
        </div>
    </section>
    <?php
        require('footer.php')
    ?>
</body>
</html>