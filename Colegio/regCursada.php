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
<nav class>
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
    $sql1="SELECT id_alumno,apeynom FROM alumno";
    $sql2="SELECT id_materia,nombre FROM materia";
    ?>
    <div>
        <h1>Registro de Cursada</h1>
        <form action="procRegCursada.php" method="post">
            <table class="tab" align="center">
                <tr>
                    <td><label for="">Alumno:</label></td>
                    <td>
                        <select name="ida" id="ida">
                            <option value="-1" selected disabled hidden>Elegir una opción</option>
                        <?php
                        $res1=mysqli_query($con,$sql1); 
                        while($al=mysqli_fetch_array($res1)){
                            echo "<option value='$al[0]'>$al[0] - $al[1]</option>";
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
                            echo "<option value='$mat[0]'>$mat[0] - $mat[1]</option>";
                        }
                        ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="">Nota 1:</label></td>
                    <td><input type="number" name="n1" id="n1" min="0" max="10" value="0"></td>
                </tr>
                <tr>
                    <td><label for="">Nota 2:</label></td>
                    <td><input type="number" name="n2" id="n2" min="0" max="10" value="0"></td>
                </tr>
                <tr>
                    <td><label for="">Asistencia:</label></td>
                    <td>
                    <select name="as" id="as" style="width: 100%;">
                        <option value="0">0</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="40">40</option>
                        <option value="50">50</option>
                        <option value="60">60</option>
                        <option value="70">70</option>
                        <option value="80">80</option>
                        <option value="90">90</option>
                        <option value="100">100</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="">Estado:</label></td>
                    <td><input type="text" name="es" id="es" value="Error"></td>
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