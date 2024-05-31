<?php
include("../conexion.php");
$nyap=$_POST["nyap"];
$dir=$_POST["dir"];
$ciu=$_POST["ciu"];
$tel=$_POST["tel"];
$falta=$_POST["falta"];
$id=$_POST["id"];

$sql="UPDATE cliente SET nomyape='$nyap', direccion='$dir', ciudad='$ciu', telefono=$tel, falta='$falta' 
WHERE cod_cliente=$id";
$res=mysqli_query($con,$sql);
if($res){
    header("Location:listCliente.php");
}else{
    echo "<br>Error<br>";
    echo "<a href='listCliente.php'>Volver</a>";
}