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
        <li><a href="regAlumno.html">Registro de Alumno</a></li>
        <li><a href="listAlumno.php">Listado de Alumnos</a></li>
        <li><a href="regMateria.html">Registro de Materia</a></li>
        <li><a href="listMateria.php">Listado de Materias</a></li>
        <li><a href="regCursada.php">Registro de Cursada</a></li>
        <li><a href="listCursada.php">Listado de Cursadas</a></li>
    </ul>
    </nav><br>
    <h1>Listado de cursadas</h1>
    <table class="tab" align="center">
        <tr>
            <th>Alumno</th>
            <th>Materia</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Asistencia</th>
            <th>Estado</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </tr>
        <?php
        include("conexion.php");
        $sql="SELECT a.apeynom,m.nombre,c.nota1,c.nota2,c.asistencia,c.estado,c.id_alumno,c.id_materia FROM cursada c 
        JOIN alumno a ON c.id_alumno=a.id_alumno JOIN materia m ON c.id_materia=m.id_materia ";
        $res=mysqli_query($con,$sql);
        if(mysqli_num_rows($res)== 0){
            echo "<tr><td colspan='8'>No se encontraron registros</td></tr>";
        }else{
            while($v=mysqli_fetch_array($res)){
                echo "<tr>";
                echo "<td>".$v[0]."</td>";
                echo "<td>".$v[1]."</td>";
                echo "<td>".$v[2]."</td>";
                echo "<td>".$v[3]."</td>";
                echo "<td>".$v[4]."</td>";
                echo "<td>".$v[5]."</td>";
                echo "<td><a href='modCursada.php?ida=$v[6]&idm=$v[7]'>Modificar</a></td>";
                echo "<td><a href='procElimCursada.php?ida=$v[6]&idm=$v[7]'>Eliminar</a></td>";
                echo "</tr>";
            }
        }
        ?>
        <tr>
            <td colspan="8"><a href="regCursada.php">Registrar cursada</a></td>
        </tr>
    </table>
</body>
</html>