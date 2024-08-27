<?php
include("conexion.php");
$mas=$_POST["mas"];
$sql="SELECT * FROM diagnostico WHERE id_mascota=$mas AND id_jaula!=0";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res)==0){
    $res2=mysqli_query($con,"DELETE FROM diagnostico WHERE id_mascota=$mas");
    $res3=mysqli_query($con,"DELETE FROM mascota WHERE id_mascota=$mas");
    header("Location:index.html");
}else{
    echo "No se puede eliminar";
}