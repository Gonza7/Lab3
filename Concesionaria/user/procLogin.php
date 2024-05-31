<?php
include("../conexion.php");
$nom=$_POST["nom"];
$cont=$_POST["con"];

$sql="SELECT user,pass FROM usuario";
$res=mysqli_query($con,$sql);
$log=false;
while($v=mysqli_fetch_array($res)){
    if($v[0]==$nom&&$v[1]==$cont){
        header("location:../inicio.html");
    }else{
        $log=true;
    }
}
if($log=true){
    echo "Error";
    echo "<a href='../index.html'>Volver</a>";
}