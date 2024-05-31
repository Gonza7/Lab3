<?php
include("conexion.php");
$id=$_GET["id"];

$sql2="SELECT * FROM cursada WHERE id_alumno=$id";
$res2=mysqli_query($con,$sql2);
if(mysqli_num_rows($res2)==0){
    $sql="DELETE FROM alumno WHERE id_alumno=$id";
    $res=mysqli_query($con,$sql);
    if($res){
        header("Location:listAlumno.php");
    }else{
        echo "<br>Error<br>";
        echo "<a href='listAlumno.php'>Volver</a>";
    }
}else{
    echo "<br>El alumno tiene cursadas<br>";
    echo "<a href='listAlumno.php'>Volver</a>";
}

