
<?php
include_once '../bd-acuerdo/crud-relaciones.php';
?>


<?php

session_start();
$usuario = $_SESSION['username'];


if(!isset($usuario)){
    header("location: ../user/user_usur.php");
}else{
;

};
?>
          <html>
	<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/CSS" href="../css/registro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" href="js/bootstrap.js"></script>
    <title>Indice</title>
	</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a class="navbar-brand" href="../index.php">
              <img class="Logotipos" src="https://cdn-icons.flaticon.com/png/512/1929/premium/1929706.png?token=exp=1653159011~hmac=eb7346763676f87b7fc5a11c612bfebc" alt="" width="35" height="35">
          </a>
            <ul class="navbar-nav me-auto ">

              <li class="nav-item">
                <a class="nav-link fw-bold text-light" href="../user/paginaprincipal.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bold text-light" href="relacionesuser.php">Relaciones Diplomaticas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bold text-light" href="importacionesuser.php">Importaciones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bold text-light" href="exportacionesuser.php">Exportaciones</a>
              </li>
                <li>
                    <a href=""><img class="iconos-redes-header" src="https://cdn-icons.flaticon.com/png/512/2504/premium/2504903.png?token=exp=1653158467~hmac=d571cf0d0a03c6ab60aead4c38a1550c" alt="Facebook"></a>
                    <a href=""><img class="iconos-redes-header" src="https://cdn-icons.flaticon.com/png/512/2504/premium/2504918.png?token=exp=1653158467~hmac=d45793c955ed11b49d2d7aca3901fc62" alt="Instragram"></a>
                    <a href=""><img class="iconos-redes-header" src="https://cdn-icons-png.flaticon.com/512/1409/1409937.png" alt="Twitter"></a>
               </li>
            </ul>
          </div>
        </div>
      </nav>
      <pre>
      </pre>
      <link rel="stylesheet" href="../css/estilos.css">
<link rel="stylesheet" href="../css/estiregisuser.css">
       <div class="container">
        <div id="cabecera">
        <!--titulo--> 
            <center><h1>Relaciones Perú</h1></center>
        </div>
            <table width="100%" border="1" cellpadding="15" >
                <?php
                $res = $MySQLiconn->query("SELECT * FROM relacion");
                while ($row=$res->fetch_array()){
                ?>
                <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['pais']; ?></td>
                  <td><?php echo $row['inicio']; ?></td>
                  <td><?php echo $row['descri']; ?></td>
                  <td><a href="?edit=<?php echo $row['id']; ?>" onclick="return confirm('Confirmar edicion')">Editar</a></td>
                  <td><a href="?del=<?php echo $row['id']; ?>" onclick="return confirm('Desea eliminar este usuario')">Eliminar</a></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <pre></pre>
    </body>
 </html>