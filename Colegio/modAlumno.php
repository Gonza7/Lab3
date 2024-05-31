<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    include("conexion.php");
    $id=$_GET["id"];
    $sql="SELECT * FROM alumno WHERE id_alumno=$id";
    $res=mysqli_query($con,$sql);
    $alu=mysqli_fetch_array($res);
    ?>
    <nav>
        <ul>
            <li><a href="regAlumno.html">Registro de Alumno</a></li>
            <li><a href="listAlumno.php">Listado de Alumnos</a></li>
            <li><a href="regMateria.html">Registro de Materia</a></li>
            <li><a href="listMateria.php">Listado de Materias</a></li>
            <li><a href="regCursada.php">Registro de Cursada</a></li>
            <li><a href="listCursada.php">Listado de Cursadas</a></li>
        </ul>
    </nav><br>
    <div>
        <h1>Actualizacion de alumno</h1>
        <form action="procModAlumno.php" method="post">
        <table align="center" class="tab">
            <tr>
                <td><label for="">Id:</label></td>
                <td><input type="text" readonly name="ida" id="ida" value="<?php echo $alu[0]?>"></td>
            </tr>
            <tr>
                <td><label for="">Dni:</label></td>
                <td><input type="number" id="dni" name="dni" value="<?php echo $alu[1] ?>"></td>
            </tr>
            <tr>
                <td><label for="">Fecha de nacimiento:</label></td>
                <td><input type="date" name="fnac" id="fnac" value="<?php echo $alu[2] ?>"></td>
            </tr>
            <tr>
                <td><label for="">Apellido y nombre:</label></td>
                <td><input type="text" name="ayn" id="ayn" value="<?php echo $alu[3] ?>"></td>
            </tr>
            <tr>
                <td><label for="">Ciudad:</label></td>
                <td><input type="text" name="ciu" id="ciu" value="<?php echo $alu[4] ?>"></td>
            </tr>
            <tr>
                <td><label for="">Domicilio:</label></td>
                <td><input type="text" name="dom" id="dom" value="<?php echo $alu[5] ?>"></td>
            </tr>
            <tr>
                <td><label for="">Telefono</label></td>
                <td><input type="text" name="tel" id="tel" value="<?php echo $alu[6] ?>"></td>
            </tr>
            <tr>
                <td><label for="">Email</label></td>
                <td><input type="text" name="mail" id="mail" value="<?php echo $alu[7] ?>"></td>
            </tr>
            <tr>
                <td><label for="">Genero</label></td>
                <td><select name="gen" id="gen">
                    <?php
                    if($alu[8]=="Masculino"){
                        echo '<option value="Masculino selected">Masculino</option>';
                        echo '<option value="Femenino">Femenino</option>';
                    }else{
                        echo '<option value="Masculino">Masculino</option>';
                        echo '<option value="Femenino" selected>Femenino</option>';
                    }
                    ?>
                </select></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="enviar" id="enviar" value="Enviar">
                    <input type="reset" value="Borrar" id="borrar" name="borrar"></td>
            </tr>
        </table>
        </form>
    </div>
</body>
</html>