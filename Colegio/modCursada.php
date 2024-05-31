<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="cursada.js"></script>
</head>
<body>
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
    <?php
    include("conexion.php");
    $ida=$_GET["ida"];
    $idm=$_GET["idm"];
    $sql1="SELECT id_alumno,apeynom FROM alumno";
    $sql2="SELECT id_materia,nombre FROM materia";
    $sql3="SELECT nota1,nota2,asistencia,estado,id_alumno,id_materia,id_cursada 
    FROM cursada WHERE id_alumno=$ida AND id_materia=$idm";
    $res3=mysqli_query($con,$sql3);
    $v=mysqli_fetch_array($res3);
    ?>
    <div>
        <h1>Actualización de Cursada</h1>
        <form action="procModCursada.php" method="post">
            <table class="tab" align="center">
                <tr>
                    <td><label for="">Id:</label></td>
                    <td><input type="text" readonly name="idc" id="idc" value="<?php echo $v[6]?>"></td>
                </tr>
                <tr>
                    <td><label for="">Alumno:</label></td>
                    <td>
                        <select name="ida" id="ida">
                            <option value="-1" selected disabled hidden>Elegir una opción</option>
                        <?php
                        $res1=mysqli_query($con,$sql1); 
                        while($al=mysqli_fetch_array($res1)){
                            if($v[4]==$al[0]){
                                echo "<option value='$al[0]' selected>$al[0] - $al[1]</option>";
                            }else{
                                echo "<option value='$al[0]'>$al[0] - $al[1]</option>";
                            }
                        }
                        ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="">Materia:</label></td>
                    <td>
                        <select name="idm" id="idm">
                        <option value="-1" selected disabled hidden>Elegir una opción</option>
                        <?php
                        $res2=mysqli_query($con,$sql2); 
                        while($mat=mysqli_fetch_array($res2)){
                            if($v[5]==$mat[0]){
                                echo "<option value='$mat[0]' selected>$mat[0] - $mat[1]</option>";
                            }else{
                                echo "<option value='$mat[0]'>$mat[0] - $mat[1]</option>";
                            }
                        }
                        ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="">Nota 1:</label></td>
                    <td><input type="number" name="n1" id="n1" min="0" max="10" value="<?php echo $v[0]?>"></td>
                </tr>
                <tr>
                    <td><label for="">Nota 2:</label></td>
                    <td><input type="number" name="n2" id="n2" min="0" max="10" value="<?php echo $v[1]?>"></td>
                </tr>
                <tr>
                    <td><label for="">Asistencia:</label></td>
                    <td>
                    <select name="as" id="as" style="width: 100%;">
                        <?php
                        for($i=0;$i<=100;$i+=10){
                            if($i==$v[2]){
                                echo "<option value='$i' selected>$i</option>";
                            }else{
                                echo "<option value='$i'>$i</option>";
                            }
                        }
                        ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="">Estado:</label></td>
                    <td><input type="text" name="es" id="es" value="<?php echo $v[3]?>"></td>
                </tr>
                <tr>
                <td colspan="2">
                    <input type="submit" name="enviar" id="enviar" value="Registrar" disabled>
                    <input type="reset" value="Borrar" id="borrar" name="borrar">
                </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>