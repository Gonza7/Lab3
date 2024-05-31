<?php
include("conexion.php");
$id=$_GET["id"];
$sql2="SELECT * FROM cursada WHERE id_materia=$id";
$res2=mysqli_query($con,$sql2);
if(mysqli_num_rows($res2)==0){
    $sql="DELETE FROM materia WHERE id_materia=$id";
    $res=mysqli_query($con,$sql);
    if($res){
        header("Location:listMateria.php");
    }else{
        echo "<br>Error<br>";
        echo "<a href='listMateria.php'>Volver</a>";
    }
}else{
    echo "<br>La materia esta registrada en cursadas<br>";
    echo "<a href='listMateria.php'>Volver</a>";
}