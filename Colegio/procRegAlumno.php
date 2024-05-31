<?php
include("conexion.php");
$dni=$_POST["dni"];
$fnac=$_POST["fnac"];
$ayn=$_POST["ayn"];
$ciu=$_POST["ciu"];
$dom=$_POST["dom"];
$tel=$_POST["tel"];
$mail=$_POST["mail"];
$gen=$_POST["gen"];

$sql="INSERT INTO alumno(dni, fecha_nacimiento, apeynom, ciudad, domicilio, telefono, mail, genero)
VALUES ($dni, '$fnac', '$ayn','$ciu','$dom','$tel','$mail','$gen')";
echo $sql;
echo "<br>";
$res=mysqli_query($con,$sql);
if($res){
    header("Location:listAlumno.php");
}else{
    echo "<br>Error<br>";
    echo "<a href='regAlumno.html'>Volver</a>";
}
