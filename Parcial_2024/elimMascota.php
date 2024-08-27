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
    <h1>Eliminar mascota</h1>
    <form action="procElimMascota.php" method="post">
        <table class="tab" align="center">
            <tr>
                <td><label for="">Mascota:</label></td>
                <td><select name="mas" id="mas">
                    <?php
                    include("conexion.php");
                    $sql3="SELECT id_mascota,alias,especie,tamaño FROM mascota";
                    $res3=mysqli_query($con,$sql3);
                    while($mas=mysqli_fetch_array($res3)){
                        echo "<option value='$mas[0]'>$mas[1] - $mas[2]</option>";
                    }
                    ?>
                </select></td>
            </tr>
            <tr>
                <td><input type="submit" value="Registrar" id="reg" name="reg"></td>
                <td><input type="reset" value="Borrar" id="bor" name="bor"></td>
            </tr>
        </table>
    </form>
</body>
</html>