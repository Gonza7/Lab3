<?php
include("conexion.php");
$idc=$_POST["idc"];
$ida=$_POST["ida"];
$idm=$_POST["idm"];
$n1=$_POST["n1"];
$n2=$_POST["n2"];
$as=$_POST["as"];
$es=$_POST["es"];

$sql2="SELECT id_cursada FROM cursada WHERE id_alumno=$ida AND id_materia=$idm AND id_cursada!=$idc";
$res2=mysqli_query($con,$sql2);

if(mysqli_num_rows($res2)>0){
    echo "<br>Ya esta registrado el alumno en la materia<br>";
    echo "<a href='listCursada.php'>Volver</a>";
}else{
    $sql="UPDATE cursada SET id_alumno=$ida, id_materia=$idm ,nota1=$n1, nota2=$n2, 
    asistencia=$as, estado='$es' WHERE id_cursada=$idc";
    $res=mysqli_query($con,$sql);
    if($res){
        header("Location:listCursada.php");
    }else{
        echo "<br>Error<br>";
        echo "<a href='listCursada.php'>Volver</a>";
    }
}



