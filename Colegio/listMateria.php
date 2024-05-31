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
    <h1>Listado de materias</h1>
    <table class="tab" align="center">
        <tr>
            <th>Nombre</th>
            <th>Cantidad de horas</th>
            <th>Tiene correlativas</th>
            <th>Curso</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </tr>
        <?php
        include("conexion.php");
        $sql="SELECT nombre,cant_horas,correlativas,curso,id_materia FROM materia";
        $res=mysqli_query($con,$sql);
        if(mysqli_num_rows($res)==0){
            echo "<tr><td colspan='6'>No se encontraron registros</td></tr>";
        }else{
            while($v=mysqli_fetch_array($res)){
                echo "<tr>";
                echo "<td>".$v[0]."</td>";
                echo "<td>".$v[1]."</td>";
                echo "<td>".$v[2]."</td>";
                echo "<td>".$v[3]."</td>";
                echo "<td><a href='modMateria.php?id=$v[4]'>Modificar</a></td>";
                echo "<td><a href='procElimMateria.php?id=$v[4]'>Eliminar</a></td>";
                echo "</tr>";
            };
        }
        ?>
        <tr>
            <td colspan="6"><a href="regMateria.html">Registrar materia</a></td>
        </tr>
    </table>
</body>
</html>