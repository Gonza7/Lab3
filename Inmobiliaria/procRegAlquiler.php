<?php
include ("conexion.php");
$fi=$_POST["fi"];
$ff=$_POST["ff"];
$dur=$_POST["dur"];
$loc=$_POST["loc"];
$inm=$_POST["inm"];

$sql2="SELECT l.sueldo FROM locatario l WHERE l.id_locatario = $loc";
$res2=mysqli_query($con,$sql2);
$sue=mysqli_fetch_array($res2);

$sql3="SELECT SUM(i.preciomensual) FROM inmueble i 
JOIN alquiler a ON i.id_inmueble = a.id_inmueble 
WHERE a.id_locatario = $loc";
$res3=mysqli_query($con,$sql3);
$sum=mysqli_fetch_array($res3);

$sql4="SELECT preciomensual,estado FROM inmueble WHERE id_inmueble=$inm";
$res4=mysqli_query($con,$sql4);
$p=mysqli_fetch_array($res4);
if(($sum[0]+$p[0])<=($sue[0]*0.5)&&$p[1]=="disponible"){
    echo "si";
    echo $sum[0]+$p[0];
    echo $sue[0]*0.5;
    echo $p[1];
    $res=mysqli_query($con,"INSERT INTO alquiler(fechainicio,fechafin,duracion,id_locatario,id_inmueble)
    VALUES ('$fi','$ff',$dur,$loc,$inm)");
    $res5=mysqli_query($con,"UPDATE inmueble SET estado='alquilado' WHERE id_inmueble=$inm");
    if($res){
        header("Location:listAlquiler.php");
    }else{
        echo "error";
    }
    

}else{
    echo "no";
    echo $sum[0]+$p[0];
    echo $sue[0]*0.5;
    echo $p[1];
}