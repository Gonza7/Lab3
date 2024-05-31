<?php
include("conexion.php");
$nom=$_POST["nom"];
$hs=$_POST["hs"];
$cor=$_POST["cor"];
$cur=$_POST["cur"];

$sql="INSERT INTO materia(nombre,cant_horas , correlativas, curso)
VALUES ('$nom',$hs,'$cor',$cur)";
echo $sql;
echo "<br>";
$res=mysqli_query($con,$sql);
if($res){
    header("Location:listMateria.php");
}else{
    echo "<br>Error<br>";
    echo "<a href='regMateria.html'>Volver</a>";
}