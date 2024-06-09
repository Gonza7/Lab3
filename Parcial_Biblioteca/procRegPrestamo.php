<?php
include("conexion.php");
$soc=$_POST["soc"];
$fp=$_POST["fp"];

$sql="SELECT c.* FROM cuota c WHERE c.id_socio=$soc 
AND c.año=YEAR('$fp') AND c.mes=MONTH('$fp') AND c.estado LIKE 'pagado'";
$res=mysqli_query($con,$sql);

if(mysqli_num_rows($res)>=1){
    $sql2="INSERT INTO prestamo(id_socio,fecha_prestamo) VALUES ($soc,'$fp')";
    $res2=mysqli_query($con,$sql2);
    $res3=mysqli_query($con,"SELECT id_prestamo FROM prestamo ORDER BY id_prestamo DESC LIMIT 1");
    $id=mysqli_fetch_array($res3);
    if($res2){
        echo "ok";
        header("Location: listDetalle.php?id=$id[0]");
    }else{
        echo "error";
    }
}else{
    echo "no";
}