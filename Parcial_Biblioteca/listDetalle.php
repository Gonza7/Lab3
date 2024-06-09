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
    <h1>Listado de libros</h1>
    <table class="tab" align="center">
        <tr>
            <th>Titulo</th>
            <th>Estado</th>
            <th>Cantidad de ejemplares</th>
        </tr>
        <?php
        include ("conexion.php");
        $id=$_GET["id"];
        $sql="SELECT l.titulo,l.estado,l.cant_ejemplares FROM libro l 
        JOIN detalleprestamo d ON d.id_libro=l.id_libro WHERE d.id_prestamo=$id";
        $res=mysqli_query($con,$sql);
        if(mysqli_num_rows($res)==0){
            echo "<tr><td colspan='3'>No hay libros</td></tr>";
        }else{
            while($v=mysqli_fetch_array($res)){
                echo "<tr>";
                echo "<td>".$v[0]."</td>";
                echo "<td>".$v[1]."</td>";
                echo "<td>".$v[2]."</td>";
                echo "</tr>";
            }
        }
        ?>
        <tr>
            <td colspan="3"><a href="regDetalle.php?id=<?php echo $id ?>">Registrar detalle</a></td>
        </tr>
    </table>
</body>
</html>