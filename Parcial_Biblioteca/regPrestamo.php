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
    <h1>Registrar prestamo</h1>
    <form action="procRegPrestamo.php" method="post">
        <table class="tab" align="center">
            <tr>
                <td><label for="">Socio:</label></td>
                <td><select name="soc" id="soc">
                    <?php
                    include("conexion.php");
                    $sql="SELECT id_socio,nomyape FROM socio";
                    $res=mysqli_query($con,$sql);
                    while($soc = mysqli_fetch_array($res)){
                        echo "<option value='$soc[0]'>$soc[0] - $soc[1]</option>";
                    }
                    ?>
                </select></td>
            </tr>
            <tr>
                <td><label for="">Fecha de préstamo:</label></td>
                <td><input type="date" name="fp" id="fp" required></td>
            </tr>
            <tr>
                <td><input type="submit" value="Registrar" name="reg" id="reg"></td>
                <td><input type="reset" value="Borrar" name="bor" id="bor"></td>
            </tr>
        </table>
    </form>
</body>
</html>