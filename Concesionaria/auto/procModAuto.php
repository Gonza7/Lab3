<?php
include("../conexion.php");
$id=$_POST["id"];
$mar=$_POST["mar"];
$mod=$_POST["mod"];
$col=$_POST["col"];
$pv=$_POST["pv"];
$cli=$_POST["cli"];

$sql="UPDATE auto SET marca='$mar', modelo='$mod', color='$col', pventa=$pv, cod_cliente=$cli
WHERE cod_auto=$id";
$res=mysqli_query($con,$sql);
if($res){
    header("Location:listAuto.php");
}else{
    echo "<br>Error<br>";
    echo "<a href='regAuto.php'>Volver</a>";
}