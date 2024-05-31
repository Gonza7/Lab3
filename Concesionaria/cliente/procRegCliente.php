<?php
include("../conexion.php");
$nyap=$_POST["nyap"];
$dir=$_POST["dir"];
$ciu=$_POST["ciu"];
$tel=$_POST["tel"];
$falta=$_POST["falta"];

$sql="INSERT INTO cliente(nomyape, direccion, ciudad, telefono, falta)
VALUES ('$nyap','$dir','$ciu',$tel,'$falta')";
$res=mysqli_query($con,$sql);
if($res){
    header("Location:listCliente.php");
}else{
    echo "<br>Error<br>";
    echo "<a href='regCliente.php'>Volver</a>";
}
