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
    <?php
    include("../conexion.php");
    $id=$_GET["id"];
    $sql="SELECT * FROM revision WHERE cod_revision=$id";
    $res=mysqli_query($con,$sql);
    $v=mysqli_fetch_array($res);
   ?>
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
    <form action="procModRevision.php" method="post">
        <table class="tab" align="center">
            <tr>
                <td><label for="">Id:</label></td>
                <td><input type="text" name="id" id="id" value="<?php echo $v[0]?>" readonly></td>
            </tr>
            <tr>
                <td><label for="">Fecha de ingreso:</label></td>
                <td><input type="date" name="ing" id="ing" value="<?php echo $v[1]?>"></td>
            </tr>
            <tr>
                <td><label for="">Fecha de egreso:</label></td>
                <td><input type="date" name="egr" id="egr" value="<?php echo $v[2]?>"></td>
            </tr>
            <tr>
                <td><label for="">Estado:</label></td>
                <td>
                    <select name="est" id="est">
                        <option value=""disabled hidden>Elegir una opción</option>
                        <?php
                            if($v[3]=="En espera"){
                                echo "<option value='En espera' selected>En espera</option>";
                                echo "<option value='En revisión'>En revisión</option>";
                                echo "<option value='Finalizado'>Finalizado</option>";
                            }else if($v[3]=="En revisión"){
                                echo "<option value='En espera'>En espera</option>";
                                echo "<option value='En revisión' selected>En revisión</option>";
                                echo "<option value='Finalizado'>Finalizado</option>";
                            }else{
                                echo "<option value='En espera'>En espera</option>";
                                echo "<option value='En revisión'>En revisión</option>";
                                echo "<option value='Finalizado' selected>Finalizado</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="">Cambio de filtro</label></td>
                <?php
                if($v[4]=="Si"){
                    echo "<td><input type='checkbox' name='fil' id='fil' checked></td>";
                }else{
                    echo "<td><input type='checkbox' name='fil' id='fil'></td>";
                }
                ?>
            </tr>
            <tr>
                <td><label for="">Cambio de aceite</label></td>
                    <?php
                if($v[5]=="Si"){
                    echo "<td><input type='checkbox' name='ace' id='ace' checked></td>";
                }else{
                    echo "<td><input type='checkbox' name='ace' id='ace'></td>";
                }
                ?>
            </tr>
            <tr>
                <td><label for="">Cambio de freno</label></td>
                <?php
                if($v[6]=="Si"){
                    echo "<td><input type='checkbox' name='fre' id='fre' checked></td>";
                }else{
                    echo "<td><input type='checkbox' name='fre' id='fre'></td>";
                }
                ?>
            </tr>
            <tr>
                <td><label for="">Descripción:</label></td>
                <td><textarea name="des" id="des" cols="25" rows="4" style="resize: none;"><?php echo $v[7]?></textarea></td>
            </tr>
            <tr>
                <td><label for="">Auto:</label></td>
                <td>
                    <select name="aut" id="aut">
                    <?php
                    include ("../conexion.php");
                    $sql = "SELECT cod_auto,marca,modelo FROM auto";
                    $res = mysqli_query($con, $sql);
                    while($aut=mysqli_fetch_array($res)){
                        if($aut[0]==$v[8]){
                            echo "<option value='$aut[0]' selected>$aut[1] - $aut[2]</option>";
                        }else{
                            echo "<option value='$aut[0]'>$aut[1] - $aut[2]</option>";
                        }
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