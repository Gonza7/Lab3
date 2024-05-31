<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <script type="text/javascript" src="../jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="revision2.js"></script>
</head>
<body>
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
    <br><br><br><br>
    <h1>Listado de revisiones</h1>
    <table class="tab" align="center">
        <tr>
            <th>Fecha de ingreso</th>
            <th>Fecha de egreso</th>
            <th>Estado</th>
            <th>Cambio de filtro</th>
            <th>Cambio de aceite</th>
            <th>Cambio de freno</th>
            <th>Descripción</th>
            <th>Auto</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </tr>
        <?php
        include("../conexion.php");
        $sql="SELECT r.*,a.cod_auto,a.marca,a.modelo FROM revision r
        JOIN auto a on r.cod_auto = a.cod_auto";
        $res=mysqli_query($con,$sql);
        if(mysqli_num_rows($res)==0){
            echo "<tr><td colspan='10'>No se encontraron registros</td></tr>";
        }else{
            while($v=mysqli_fetch_array($res)){
            echo "<tr>";
            echo "<td>$v[1]</td>";
            echo "<td>$v[2]</td>";
            echo "<td>$v[3]</td>";
            echo "<td>$v[4]</td>";
            echo "<td>$v[5]</td>";
            echo "<td>$v[6]</td>";
            echo '<td><textarea cols="25" rows="4" style="resize: none;" readonly>'.$v[7].'</textarea></td>';
            echo "<td>$v[10] - $v[11]</td>";
            echo "<td><a href='modRevision.php?id=$v[0]'>Modificar</a></td>";
            echo "<td><a href='procElimRevision.php?id=$v[0]'>Eliminar</a></td>";
            echo "</tr>";
            }
        }
        ?>
        <tr>
            <td colspan="10"><a href="regRevision.php">Registrar revisión</a></td>
        </tr>
        <tr>
            <form action="listRevisionPorFecha.php" method="post">
                <td colspan="2"><label for="">Desde:</label></td>
                <td colspan="2"><input type="date" name="des" id="des"></td>
                <td colspan="2"><label for="">Hasta:</label></td>
                <td colspan="2"><input type="date" name="has" id="has"></td>
                <td colspan="2"><input type="submit" value="Listar" id="listF" disabled></td>
            </form>
        </tr>
        <tr>
            <td colspan="10"><a href="listRevisionNoFinalizadas.php">Listado de revisiones no finalizadas</a></td>
        </tr>
    </table>
</body>
</html>