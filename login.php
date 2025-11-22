<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Inicia Sesión</title>
</head>
<body>
    <?php
        require('header2.php')
    ?>
    <section class="form-main">
        <div class="form-content">
            <div class="form-box">
                <h3>Bienvenido</h3>
                <form action="">
                    <div class="input-box">
                        <input type="text" placeholder="Correo" class="input-control" name="" id="">
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="Contraseña" class="input-control" name="" id="">
                        <div class="input-link">
                            <a href="Recuperar-contraseña.php" class="form-text">Has olvidado tu contraseña</a>
                        </div>
                    </div>
                    <!-- <button type="submit" class="form-btn">Iniciar Sesión</button> -->
                    <!-- <button type="submit" class="form-btn"><a href="index.php">Iniciar Sesión</a></button> -->
                      <div class="form-actions">
        <button type="submit" class="form-btn">Iniciar Sesión</button>
      </div>
                </form>
                <p>No tienes una cuenta? <a href="registro.php">Crear Cuenta</a></p>
            </div>
        </div>
    </section>
</body>
</html>