<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include("conexion.php");
    $id=$_GET["id"];
    $sql="SELECT * FROM materia WHERE id_materia=$id";
    $res=mysqli_query($con,$sql);
    $mat=mysqli_fetch_array($res);
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
        <h1>Actualizacion de materia</h1>
        <form action="procModMateria.php" method="post">
        <table align="center" class="tab">
        <tr>
                <td><label for="">Id:</label></td>
                <td><input type="text" name="idm" id="idm" value="<?php echo $mat[0]?>" readonly></td>
            </tr>
            <tr>
                <td><label for="">Nombre:</label></td>
                <td><input type="text" name="nom" id="nom" value="<?php echo $mat[1]?>"></td>
            </tr>
            <tr>
                <td><label for="">Cantidad de horas:</label></td>
                <td><input type="number" name="hs" id="hs" value="<?php echo $mat[2]?>"></td>
            </tr>
            <tr>
                <td><label for="">Tiene correlativas:</label></td>
                <td>
                    <?php
                    if($mat[3]=="si"){
                        echo '<span>Si</span><input type="radio" name="cor" id="si" value="si" class="aaa" checked>';
                        echo '<span>No</span><input type="radio" name="cor" id="no" value="no" class="aaa">';
                    }else{
                        echo '<span>Si</span><input type="radio" name="cor" id="si" value="si" class="aaa">';
                        echo '<span>No</span><input type="radio" name="cor" id="no" value="no" class="aaa" checked>';
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td><label for="">Curso:</label></td>
                <td>
                    <select name="cur" id="cur">
                        <?php
                        if($mat[4]==1){
                            echo '<option value="1" selected>1</option>';
                            echo '<option value="2">2</option>';
                        }else{
                            echo '<option value="1">1</option>';
                            echo '<option value="2" selected>2</option>';
                        }
                        ?>
                    </select>
                </td>
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