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
    <h1>Registrar detalle</h1>
    <form action="procRegDetalle.php" method="post">
        <table class="tab" align="center">
            <tr>
                <td><label for="">Prestamo:</label></td>
                <td>
                    <?php
                    include ("conexion.php");
                    $id=$_GET["id"];
                    echo "<input type='text' name='pre' readonly value='$id'>";
                    ?>
                </td>
            </tr>
            <tr>
                <td><label for="">Libro:</label></td>
                <td><select name="lib" id="lib">
                    <?php
                    $sql="SELECT l.id_libro,l.titulo FROM libro l";
                    $res=mysqli_query($con,$sql);
                    while($lib=mysqli_fetch_array($res)){
                        echo "<option value='$lib[0]'>$lib[0] - $lib[1]</option>";
                    }
                    ?>
                </select></td>
            </tr>
            <tr>
                <td><label for="">Observaciones:</label></td>
                <td><textarea name="obs" id="obs"></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" value="Registrar"></td>
                <td><input type="reset" value="Borrar"></td>
            </tr>
        </table>
    </form>
</body>
</html>