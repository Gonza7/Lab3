<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="jquery-3.7.1.min.js"></script>
    <script src="diagnostico.js"></script>
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
    <h1>Registrar diagnóstico</h1>
    <form action="procRegDiagnostico.php" method="post">
        <table class="tab" align="center">
            <tr>
                <td><label for="">Mascota:</label></td>
                <td><select name="mas" id="mas">
                    <?php
                    include("conexion.php");
                    $sql="SELECT id_mascota,alias,especie,tamaño FROM mascota";
                    $res=mysqli_query($con,$sql);
                    while($mas=mysqli_fetch_array($res)){
                        echo "<option value='$mas[0]'>$mas[1] - $mas[2] - $mas[3]</option>";
                    }
                    ?>
                </select></td>
            </tr>
            <tr>
                <td><label for="">Veterinario:</label></td>
                <td><select name="vet" id="vet">
                    <?php
                    $sql2="SELECT id_veterinario,nomyape FROM veterinario";
                    $res2=mysqli_query($con,$sql2);
                    while($vet=mysqli_fetch_array($res2)){
                        echo "<option value='$vet[0]'>$vet[1]</option>";
                    }
                    ?>
                </select></td>
            </tr>
            <tr>
                <td><label for="">Hospitalización:</label></td>
                <td><select name="hos" id="hos">
                    <option value="si">Si</option>
                    <option value="no">No</option>
                </select></td>
            </tr>
            <tr>
                <td><label for="">Jaula:</label></td>
                <td><select name="jau" id="jau">
                <?php
                    $sql3="SELECT * FROM jaulas WHERE estado = 'disponible'";
                    $res3=mysqli_query($con,$sql3);
                    while($jau=mysqli_fetch_array($res3)){
                        echo "<option value='$jau[0]'>$jau[1] - $jau[2]</option>";
                    }
                    ?>
                </select></td>
            </tr>
            <tr>
                <td><label for="">Fecha:</label></td>
                <td><input type="date" name="fec" id="fec"></td>
            </tr>
            <tr>
                <td><label for="">Hora:</label></td>
                <td><input type="number" name="hor" id="hor" max="24" min="1" value="1"></td>
            </tr>
            <tr>
                <td><label for="">Motivo:</label></td>
                <td><select name="mot" id="mot">
                    <option value="vacunas">Vacunas</option>
                    <option value="control">Control</option>
                </select></td>
            </tr>
            <tr>
                <td><label for="">Temperatura:</label></td>
                <td><input type="number" name="temp" id="temp"></td>
            </tr>
            <tr>
                <td><label for="">Peso:</label></td>
                <td><input type="number" name="pes" id="pes"></td>
            </tr>
            <tr>
                <td><label for="">Tamaño:</label></td>
                <td>
                    <input type="text" name="tam" id="tam" readonly>
                </td>
            </tr>
            <tr>
                <td><label for="">Síntomas</label></td>
                <td><input type="text" name="sin" id="sin"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Registrar" id="reg" name="reg"></td>
                <td><input type="reset" value="Borrar" id="bor" name="bor"></td>
            </tr>
        </table>
    </form>
</body>
</html>