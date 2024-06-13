<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <br><br>
    <h1>Listado de alquileres</h1>
    <?php
    include("conexion.php");
    $sql="SELECT a.id_alquiler,ld.apellidoynombre,l.apellidoynombre,a.fechainicio,i.preciomensual,a.duracion,
    i.cant_habitaciones,i.cant_baños,i.metroscuadrados 
    FROM alquiler a JOIN inmueble i ON a.id_inmueble = i.id_inmueble
    JOIN locatario l ON a.id_locatario = l.id_locatario JOIN locador ld ON ld.id_locador = i.id_locador";
    $res=mysqli_query($con,$sql);
    ?>
    <br>
    <table class="tab" align="center">
        <tr>
            <th>Locador</th>
            <th>Locatario</th>
            <th>Fecha de inicio</th>
            <th>Precio mensual</th>
            <th>Duracion</th>
            <th>Inmueble</th>
        </tr>
        <?php
        if(mysqli_num_rows($res)==0){
            echo "<td colspan='6'>No se encontraron alquileres</td>";
        }else{
            while($v=mysqli_fetch_array($res)){
                echo "<tr>";
                echo "<td>".$v[1]."</td>";
                echo "<td>".$v[2]."</td>";
                echo "<td>".$v[3]."</td>";
                echo "<td>".$v[4]."</td>";
                echo "<td>".$v[5]."</td>";
                echo "<td> Habitaciones: $v[6] - Baños: $v[7] - Metros cuadrados: $v[8]</td>";
            }
        }
        ?>
        <tr>
            <td colspan="6"><a href="regAlquiler.php">Registrar alquiler</a></td>
        </tr>
        <tr>
            <form action="listAlquiler2.php" method="post">
            <td><label for="">Duracion</label></td>
            <td colspan="2">
                <select name="dur" id="dur" required>
                    <option value="6">6 meses</option>
                    <option value="12">12 meses</option>
                    <option value="18">18 meses</option>
                    <option value="24">24 meses</option>
                </select>
            </td>
            <td><label for="">Año</label></td>
            <td><input type="number" name="a" id="a" required></td>
            <td><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
            </form>
            
        </tr>
    </table>
</body>
</html>