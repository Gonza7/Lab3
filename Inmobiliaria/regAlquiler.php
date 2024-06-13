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
    <h1>Registro de alquiler</h1>
    <form action="procRegAlquiler.php" method="post">
        <table class="tab" align="center">
            <tr>
                <td><label for="">Fecha inicio:</label></td>
                <td><input type="date" name="fi" id="fi" required></td>
            </tr>
            <tr>
                <td><label for="">Fecha fin:</label></td>
                <td><input type="date" name="ff" id="ff" required></td>
            </tr>
            <tr>
                <td><label for="">Duracion</label></td>
                <td><select name="dur" id="dur" required>
                    <option value="6">6 meses</option>
                    <option value="12">12 meses</option>
                    <option value="18">18 meses</option>
                    <option value="24">24 meses</option>
                </select></td>
            </tr>
            <tr>
                <td><label for="">Locatario</label></td>
                <td><select name="loc" id="loc" required>
                    <?php
                    include("conexion.php");
                    $sql_l="SELECT * FROM locatario";
                    $res_l=mysqli_query($con,$sql_l);
                    while($loc=mysqli_fetch_array($res_l)){
                        echo "<option value='$loc[0]'>$loc[0] - $loc[1]</option>";
                    }
                    ?>
                </select></td>
            </tr>
            <tr>
                <td><label for="">Inmueble</label></td>
                <td><select name="inm" id="inm" required>
                    <?php
                    $sql_i="SELECT * FROM inmueble";
                    $res_i=mysqli_query($con,$sql_i);
                    while($inm=mysqli_fetch_array($res_i)){
                        echo "<option value='$inm[0]'>$inm[0] - habitaciones: $inm[1], metroscuadrados: $inm[4], precio: $inm[6]</option>";
                    }
                    ?>
                </select></td>
            </tr>
            <tr>
                <td><input type="submit" value="Enviar"></td>
                <td><input type="reset" value="Borrar"></td>
            </tr>
        </table>
    </form>    
</body>
</html>