<?php
include("../conexion.php");
$mar=$_POST["mar"];
$mod=$_POST["mod"];
$col=$_POST["col"];
$pv=$_POST["pv"];
$cli=$_POST["cli"];

$sql="INSERT INTO auto(marca,modelo,color,pventa,cod_cliente)
VALUES ('$mar','$mod','$col',$pv,$cli)";
$res=mysqli_query($con,$sql);
if($res){
    header("Location:listAuto.php");
}else{
    echo "<br>Error<br>";
    echo "<a href='regAuto.php'>Volver</a>";
}