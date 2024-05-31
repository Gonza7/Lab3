<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div>
    <?php
    include("../conexion.php");
    $sql="SELECT * FROM cliente";
    $res=mysqli_query($con,$sql);
    ?>
    <nav class="nav">
        <ul>
            <li><a href="../inicio.html"><h2>Inicio</h2></a></li>
            <li><h4>Auto</h4><a href="../auto/regAuto.php">Registro</a><br><a href="../auto/listAuto.php">Listado</a></li>
            <li><h4>Cliente</h4><a href="../cliente/regCliente.php">Registro</a><br><a href="../cliente/listCliente.php">Listado</a></li>
            <li><h4>Revisión</h4><a href="../revision/regRevision.php">Registro</a><br><a href="../revision/listRevision.php">Listado</a></li>
        </ul>
        <ul style="float: right;">
            <li><h4>Usuario</h4><a href="../index.html">Cerrar sesión</a></li>
        </ul>
    </nav>
    </div>
    <br><br><br><br>
    <h1>Listado de clientes</h1>
    <table class="tab" align="center">
        <tr>
            <th>Nombre y apellido</th>
            <th>Dirección</th>
            <th>Ciudad</th>
            <th>Telefono</th>
            <th>Fecha de alta</th>
            <th>Revisiones</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </tr>
        <?php
        if(mysqli_num_rows($res)==0){
            echo "<tr><td colspan='8'>No hay clientes registrados</td></tr>";
        }else{
            while($v = mysqli_fetch_array($res)){
                echo "<tr>";
                echo "<td>$v[1]</td>";
                echo "<td>$v[2]</td>";
                echo "<td>$v[3]</td>";
                echo "<td>$v[4]</td>";
                echo "<td>$v[5]</td>";
                echo "<td><a href='../revision/listRevisionCliente.php?id=$v[0]'>Revisiones</a></td>";
                echo "<td><a href='modCliente.php?id=$v[0]'>Modificar</a></td>";
                echo "<td><a href='procElimCliente.php?id=$v[0]'>Eliminar</a></td>";
                echo "</tr>";
            }
        }
        ?>
        <tr>
            <td colspan="8"><a href="regCliente.php">Registrar cliente</a></td>
        </tr>
    </table>
</body>
</html>