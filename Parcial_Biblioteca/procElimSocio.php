<?php
include("conexion.php");
$soc=$_POST["soc"];

$sql="SELECT * FROM prestamo WHERE id_socio=$soc";
$res=mysqli_query($con,$sql);

if(mysqli_num_rows($res)==0){
    $sql2="SELECT * FROM cuota WHERE id_socio=$soc AND estado LIKE 'adeuda' AND año=2024 AND mes=6";
    $res2=mysqli_query($con,$sql2);
    if(mysqli_num_rows($res2)==0){
        $sql3="DELETE FROM socio WHERE id_socio=$soc";
        $res3=mysqli_query($con,$sql3);
        if($res3){
            echo "ok";
            header("Location:index.html");
        }else{
            echo "error";
        }
    }else{
        echo "error";
    }
}else{
    echo "error";
}