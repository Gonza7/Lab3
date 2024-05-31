<?php
include("conexion.php");
$ida=$_GET["ida"];
$idm=$_GET["idm"];
$sql2="SELECT id_cursada FROM cursada WHERE id_alumno=$ida AND id_materia=$idm";
$v=mysqli_fetch_array(mysqli_query($con,$sql2));
$sql="DELETE FROM cursada WHERE id_cursada=$v[0]";
$res=mysqli_query($con,$sql);
if($res){
    header("Location:listCursada.php");
}else{
    echo "<br>Error<br>";
    echo "<a href='listCursada.php'>Volver</a>";
}