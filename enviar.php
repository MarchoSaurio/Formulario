<?php
$sErr="";
$sNom="";

        if (isset($_POST ["txtNombre"]) && !empty($_POST["txtNombre"]))
            $sNom = $_POST["txtNombre"];

        else 
            $sErr = "Faltan Datos";

?>

<html>
   
    <head>
    <link rel="stylesheet" href="CSS/style2.css">
        <title>
            Registro
        </title>
    </head>
    <body>
    
    <article class="card">
    <h4>Validacion de datos</h4>

    <p><strong>Nombre:</strong> <?php echo $_POST["nombre"];?></p>

    <p><strong>Apellidos:</strong> <?php echo $_POST["apellido"];?></p>

    <p><strong>Correo Electrónico:</strong> <?php echo $_POST["email"];?></p>

    <p><strong>Fecha de Nacimiento:</strong> <?php echo $_POST["fecha"];?></p>

    <p><strong>Género:</strong> <?php echo $_POST["genero"];?></p>

    <p class="reg"><em>Desea completar el registro</em></p>
    <br>
    <div class="buttons">
        <button><a href="confir.html">Confirmar</a></button>
        <button><a href="index.html">Cancelar</a></button>
    </div>
    </article>

    </body>
</html>
