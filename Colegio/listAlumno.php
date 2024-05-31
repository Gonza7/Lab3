<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
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
    <h1>Listado de alumnos</h1>
    <table class="tab" align="center">
            <tr>
                <th>Apellido y nombre</th>
                <th>Dni</th>
                <th>Fecha de nacimiento</th>
                <th>Ciudad</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>
        <?php
        include("conexion.php");
        $sql="SELECT apeynom, dni, fecha_nacimiento, ciudad, id_alumno FROM alumno";
        $res=mysqli_query($con,$sql);
        if(mysqli_num_rows($res)==0){
            echo "<tr>";
            echo "<td colspan='6'>No se encontraron registros</td>";
            echo "</tr>";
        }else{
            while($v=mysqli_fetch_array($res)){
                echo "<tr>";
                echo "<td>".$v[0]."</td>";
                echo "<td>".$v[1]."</td>";
                echo "<td>".$v[2]."</td>";
                echo "<td>".$v[3]."</td>";
                echo "<td><a href='modAlumno.php?id=$v[4]'>Modificar</a></td>";
                echo "<td><a href='procElimAlumno.php?id=$v[4]'>Eliminar</a></td>";
                echo "</tr>";
            };
        }
            ?>
            <tr>
                <td colspan="6"><a href="regAlumno.html">Registrar alumno</a></td>
            </tr>
        </table>
</body>
</html>