<?php
include("conexion.php");
$pre=$_POST["pre"];
$lib=$_POST["lib"];
$obs=$_POST["obs"];

$sql="SELECT * FROM libro WHERE id_libro=$lib AND estado LIKE 'en biblioteca' AND cant_ejemplares>1";
$res=mysqli_query($con,$sql);

if(mysqli_num_rows($res)>=1){
    $sql="INSERT INTO detalleprestamo(id_prestamo,id_libro,observaciones) VALUES ($pre,$lib,'$obs')";
    $res=mysqli_query($con,$sql);
    if($res){
        $sql2="UPDATE libro SET cant_ejemplares=(cant_ejemplares-1) WHERE id_libro=$lib";
        $res2=mysqli_query($con,$sql2);
        header("Location:listDetalle.php?id=$pre");
    }else{
        echo "Error";
    }
}else{
    echo "Error";
}