<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <script type="text/javascript" src="../jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="cliente.js"></script>
</head>
<body>
    <?php
    include("../conexion.php");
    $id=$_GET["id"];
    $sql="SELECT * FROM cliente WHERE cod_cliente=$id";
    $res=mysqli_query($con,$sql);
    $v=mysqli_fetch_array($res);
    ?>
    <div>
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
    </div>
    <div>
    <br><br><br><br>
    <h1>Actualizar Cliente</h1>
        <form action="procModCliente.php" method="post">
            <table class="tab" align="center">
                <tr>
                    <td><label for="">Id:</label></td>
                    <td><input type="text" id="id" name="id" value="<?php echo $v[0]?>" readonly></td>
                </tr>
                <tr>
                    <td><label for="">Nombre y apellido:</label></td>
                    <td><input type="text" id="nyap" name="nyap" value="<?php echo $v[1]?>"></td>
                </tr>
                <tr>
                    <td><label for="">Dirección:</label></td>
                    <td><input type="text" id="dir" name="dir" value="<?php echo $v[2]?>"></td>
                </tr>
                <tr>
                    <td><label for="">Ciudad:</label></td>
                    <td><input type="text" id="ciu" name="ciu" value="<?php echo $v[3]?>"></td>
                </tr>
                <tr>
                    <td><label for="">Telefono:</label></td>
                    <td><input type="text" id="tel" name="tel" value="<?php echo $v[4]?>"></td>
                </tr>
                <tr>
                    <td><label for="">Fecha de alta:</label></td>
                    <td><input type="date" id="falta" name="falta" value="<?php echo $v[5]?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Registrar" id="reg"></td>
                    <td><input type="reset" value="Borrar" id="bor"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>