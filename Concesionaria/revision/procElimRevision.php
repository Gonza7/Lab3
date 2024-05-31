<?php
include("../conexion.php");
$id=$_GET["id"];

$sql="DELETE FROM revision WHERE cod_revision=$id";
$res=mysqli_query($con,$sql);
if($res){
    header("Location:listRevision.php");
}else{
    echo "<br>Error<br>";
    echo "<a href='listRevision.php'>Volver</a>";
}