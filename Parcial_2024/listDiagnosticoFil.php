<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="jquery-3.7.1.min.js"></script>
    <script src=""></script>
</head>
<body>
<nav>
        <ul>
            <li><a href="regDiagnostico.php">Registrar diagnostico</a></li>
            <li><a href="listDiagnostico.php">Listar diagnostico</a></li>
            <li><a href="elimMascota.php">Eliminar mascota</a></li>
        </ul>
    </nav>
    <br><br><br><br>
    <h1>Listado de diagnostico</h1>
    <table class="tab" align="center">
        <tr>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Veterinario</th>
            <th>Cliente</th>
            <th>Mascota</th>
            <th>Motivo</th>
            <th>Jaula</th>
        </tr>
        <?php
        include("conexion.php");
        $vet=$_POST["vet"];
        $mas=$_POST["mas"];
        $sql="SELECT d.fecha_atencion,d.hora,v.nomyape,c.nomyape,m.alias,m.especie,m.raza,
        m.tamaño,m.fnacimiento,d.motivo,d.id_diagnostico FROM diagnostico d 
        JOIN veterinario v ON v.id_veterinario=d.id_veterinario
        JOIN mascota m ON m.id_mascota=d.id_mascota
        JOIN cliente c ON c.id_cliente=m.id_cliente WHERE d.id_veterinario=$vet AND d.id_mascota=$mas";
        $res=mysqli_query($con,$sql);
        if(mysqli_num_rows($res)==0){
            echo "<tr>";
            echo "<td colspan='7'>No se encontraron registros</td>";
            echo "</tr>";
        }else{
            while($v=mysqli_fetch_array($res)){
                echo "<tr>";
                echo "<td>".$v[0]."</td>";
                echo "<td>".$v[1]."</td>";
                echo "<td>".$v[2]."</td>";
                echo "<td>".$v[3]."</td>";
                echo "<td>$v[4] - $v[5] - $v[6] - $v[7] - $v[8]</td>";
                echo "<td>".$v[9]."</td>";
                $sql2="SELECT * FROM diagnostico WHERE id_jaula=0 and id_diagnostico=$v[10]";
                $res2=mysqli_query($con,$sql2);
                if(mysqli_num_rows($res2)!=0){
                    echo "<td></td>";
                }else{
                    $sql3="SELECT j.* FROM jaulas j JOIN diagnostico d ON d.id_jaula=j.id_jaula WHERE d.id_diagnostico=$v[10]";
                    $res3=mysqli_query($con,$sql3);
                    $j=mysqli_fetch_array($res3);
                    echo "<td>$j[0] - $j[2]</td>";
                }
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>
</html>