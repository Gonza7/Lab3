<?php
include("conexion.php");
$idm=$_POST["idm"];
$nom=$_POST["nom"];
$hs=$_POST["hs"];
$cor=$_POST["cor"];
$cur=$_POST["cur"];

$sql="UPDATE materia SET nombre='$nom', cant_horas=$hs, correlativas='$cor', curso=$cur WHERE id_materia=$idm";
$res=mysqli_query($con,$sql);

if($res){
    header("Location:listMateria.php");
}else{
    echo "<br>Error<br>";
    echo "<a href='modMateria.html'>Volver</a>";
}