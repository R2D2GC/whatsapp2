<?php
    include_once 'conexion.php';

    $sql="select * from contacto";
    $resultado=mysqli_query($con,$sql);
    $num_filas=mysqli_num_rows($resultado);

    echo $num_filas;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>administrar contactos</title>
</head>
<body>
    <br>
    <center>
        <h1>administrar contactos</h1>
        <table border=1>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>direccion</th>
                <th>e-mail</th>
                <th>telefono</th>
                <th>celular</th>
                <th>whatsapp</th>
                <th>acciones</th>
            </tr>
           <?php
           while($fila=mysqli_fetch_assoc($resultado))
           {?>
            <tr>
                <td><?php echo $fila['id_contacto'] ?></td>
                <td><?php echo $fila['nombre_suc'] ?></td>
                <td><?php echo $fila['id_contacto'] ?></td>
                <td><?php echo $fila['id_contacto'] ?></td>
                <td><?php echo $fila['id_contacto'] ?></td>
                <td><?php echo $fila['id_contacto'] ?></td>
                <td><?php echo $fila['id_contacto'] ?></td>
                <td><a href="actualizar.php?id=<?php echo $fila['id_contacto'] ?>">actualizar</a></td>
            </tr>
           
           <?php
            }
           ?>
        </table>
        <hr>
        <h2>NUmero de Registros</h2>
    </br>    
</body>
</html>