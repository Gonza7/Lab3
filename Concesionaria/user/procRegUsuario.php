<?php
include("../conexion.php");
$nom=$_POST["nom"];
$cont=$_POST["cont"];

$sql2="SELECT user,pass FROM usuario WHERE user='$nom'";
$us=mysqli_query($con,$sql2);
if(mysqli_num_rows($us)== 0){
    $sql="INSERT INTO usuario (user,pass) VALUES ('$nom','$cont')";
    $res=mysqli_query($con,$sql);
    if($res){
        header("Location:../inicio.html");
    }else{
        echo "Error";
        echo "<a href='../index.html'>Volver</a>";
    }
}else{
    echo "El usuario ya existe";
    echo "<a href='regUsuario.html'>Volver</a>";
}
