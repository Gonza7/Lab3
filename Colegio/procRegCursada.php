<?php
include("conexion.php");
$ida=$_POST["ida"];
$idm=$_POST["idm"];
$n1=$_POST["n1"];
$n2=$_POST["n2"];
$as=$_POST["as"];
$es=$_POST["es"];

$sql2="SELECT * FROM cursada WHERE id_alumno=$ida AND id_materia=$idm";
$res2=mysqli_query($con,$sql2);

if(mysqli_num_rows($res2)>0){
    echo "<br>Ya esta registrado el alumno en la materia<br>";
    echo "<a href='regCursada.php'>Volver</a>";
}else{
    $sql="INSERT INTO cursada(id_alumno,id_materia,nota1,nota2,asistencia,estado)
    VALUES ($ida,$idm,$n1,$n2,$as,'$es')";
    echo $sql;
    echo "<br>";
    $res=mysqli_query($con,$sql);
    if($res){
        header("Location:listCursada.php");
    }else{
        echo "<br>Error<br>";
        echo "<a href='regCursada.php'>Volver</a>";
    }
}
