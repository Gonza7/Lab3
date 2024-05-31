<?php
include("conexion.php");
$ida=$_POST["ida"];
$dni=$_POST["dni"];
$fnac=$_POST["fnac"];
$ayn=$_POST["ayn"];
$ciu=$_POST["ciu"];
$dom=$_POST["dom"];
$tel=$_POST["tel"];
$mail=$_POST["mail"];
$gen=$_POST["gen"];

$sql="UPDATE alumno SET dni='$dni', fecha_nacimiento='$fnac', apeynom='$ayn', 
ciudad='$ciu', domicilio='$dom', telefono='$tel', mail='$mail', genero='$gen' WHERE id_alumno=$ida";
$res=mysqli_query($con,$sql);
if($res){
    header("Location:listAlumno.php");
}else{
    echo "<br>Error<br>";
    echo "<a href='modAlumno.php'>Volver</a>";
}