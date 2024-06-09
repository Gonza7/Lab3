<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="regPrestamo.php">Registrar préstamo</a></li>
            <li><a href="listPrestamo.php">Listar préstamo</a></li>
            <li><a href="elimSocio.php">Eliminar socio</a></li>
        </ul>
    </nav>
    <br><br><br><br>
    <h1>Listado de préstamos</h1>
    <table class="tab" align="center">
        <tr>
            <th>Socio</th>
            <th>Fecha de préstamo</th>
            <th>Estado de cuota</th>
            <th>Libros</th>
        </tr>
        <?php
        include("conexion.php");
        $sql="SELECT s.nomyape,p.fecha_prestamo,c.estado,p.id_prestamo FROM prestamo p
        JOIN socio s ON p.id_socio=s.id_socio JOIN cuota c ON s.id_socio=c.id_socio WHERE c.estado LIKE 'pagado'";
        $res=mysqli_query($con,$sql);
        if(mysqli_num_rows($res)==0){
            echo "<tr><td colspan='4'>No se encontraron registros</td></tr>";
        }else{
            while($v=mysqli_fetch_array($res)){
                echo "<tr>";
                echo "<td>".$v[0]."</td>";
                echo "<td>".$v[1]."</td>";
                echo "<td>".$v[2]."</td>";
                echo "<td><a href='listDetalle.php?id=$v[3]'>Libros</a></td>";
                echo "</tr>";
            }
        }
        ?>
        <tr>
            <td colspan="4"><a href="regPrestamo.php">Registrar prestamo</a></td>
        </tr>
    </table>
</body>
</html>