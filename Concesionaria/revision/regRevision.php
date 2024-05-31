<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <script type="text/javascript" src="../jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="revision.js"></script>
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
    <h1>Registrar revisión</h1>
    <form action="procRegRevision.php" method="post">
        <table class="tab" align="center">
            <tr>
                <td><label for="">Fecha de ingreso:</label></td>
                <td><input type="date" name="ing" id="ing"></td>
            </tr>
            <tr>
                <td><label for="">Fecha de egreso:</label></td>
                <td><input type="date" name="egr" id="egr"></td>
            </tr>
            <tr>
                <td><label for="">Estado:</label></td>
                <td>
                    <select name="est" id="est">
                        <option value="" selected disabled hidden>Elegir una opción</option>
                        <option value="En espera">En espera</option>
                        <option value="En revisión">En revisión</option>
                        <option value="Finalizado">Finalizado</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="">Cambio de filtro</label></td>
                <td><input type="checkbox" name="fil" id="fil"></td>
            </tr>
            <tr>
                <td><label for="">Cambio de aceite</label></td>
                <td><input type="checkbox" name="ace" id="ace"></td>
            </tr>
            <tr>
                <td><label for="">Cambio de freno</label></td>
                <td><input type="checkbox" name="fre" id="fre"></td>
            </tr>
            <tr>
                <td><label for="">Descripción:</label></td>
                <td><textarea name="des" id="des" cols="25" rows="4" style="resize: none;"></textarea></td>
            </tr>
            <tr>
                <td><label for="">Auto:</label></td>
                <td>
                    <select name="aut" id="aut">
                        <option value="" selected disabled hidden>Elegir una opción</option>
                    <?php
                    include ("../conexion.php");
                    $sql = "SELECT cod_auto,marca,modelo FROM auto";
                    $res = mysqli_query($con, $sql);
                    while($aut=mysqli_fetch_array($res)){
                        echo "<option value='$aut[0]'>$aut[1] - $aut[2]</option>";
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