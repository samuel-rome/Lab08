<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login con sesion</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/CSS" href="../css/login.css">
</head>
<body>
<div class="container">
        <div id="cabecera">
            <center><h1>Iniciar sesion</h1></center>
        </div>
        </div>
    <center>
    <form action="user_admin.php" method="POST">
        <input type="text" name="usuario" placeholder="Digite usuario">
        <br><br>
        <input type="password" name="clave" placeholder="Ingrese Clave">
        <br><br>
        <button type="submit">ENTRAR</button>
    </form>
    <?php
    echo "<b>Volver a <a href='../Index.php'> INICIO </a></b>";
?>
    </center>
</body>
</html>