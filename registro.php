<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Registro</title>
</head>
<body>
    <?php
        require('header2.php')
    ?>
    <section class="form-main">
        <div class="form-content">
            <div class="form-box">
                <h3>Registrate</h3>
                <form action="">
                    <div class="input-box">
                        <input type="text" placeholder="Nombre" class="input-control" name="" id="">
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Correo" class="input-control" name="" id="">
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="Contraseña" class="input-control" name="" id="">
                    </div>
                    <!-- <button type="submit" class="form-btn">Crear Cuenta</button> -->
                     <button type="submit" class="form-btn"><a href="login.php">Crear Cuenta</a></button>
                </form>
                <p>Ya tienes una cuenta? <a href="login.php">Iniciar Sesión</a></p>
            </div>
        </div>
    </section>
</body>
</html>