<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <script src="../jquery-3.7.1.min.js"></script>
    <script src="auto.js"></script>
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
    <br><br><br>
    <h1>Registrar auto</h1>
    <form action="progRegAuto.php" method="post">
        <table class="tab" align="center">
            <tr>
                <td><label for="">Marca:</label></td>
                <td><input type="text" name="mar" id="mar"></td>
            </tr>
            <tr>
                <td><label for="">Modelo:</label></td>
                <td><input type="text" name="mod" id="mod"></td>
            </tr>
            <tr>
                <td><label for="">Color:</label></td>
                <td><input type="text" name="col" id="col"></td>
            </tr>
            <tr>
                <td><label for="">Precio venta:</label></td>
                <td><input type="number" name="pv" id="pv"></td>
            </tr>
            <tr>
                <td><label for="">Cliente:</label></td>
                <td>
                    <select name="cli" id="cli">
                        <option value="-1" disabled selected hidden>Elegir una opcion</option>
                        <?php
                        include("../conexion.php");
                        $sql="SELECT cod_cliente,nomyape FROM cliente";
                        $res=mysqli_query($con,$sql);
                        while($cli=mysqli_fetch_array($res)){
                            echo "<option value='$cli[0]'>$cli[0] - $cli[1]</option>";
                        } 
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Registrar" id="reg"></td>
                <td><input type="reset" value="Borrar" id="bor"></td>
            </tr>
        </table>
    </form>
</body>
</html>