<?php
include("../conexion.php");
$id=$_GET["id"];

$sql2="SELECT * FROM auto WHERE cod_cliente=$id";
$res2=mysqli_query($con,$sql2);
if(mysqli_num_rows($res2)==0){
    $sql="DELETE FROM cliente WHERE cod_cliente=$id";
    $res=mysqli_query($con,$sql);
    if($res){
        header("Location:listCliente.php");
    }else{
        echo "<br>Error<br>";
        echo "<a href='listCliente.php'>Volver</a>";
    }
}else{
    echo "<br>No se puede eliminar<br>";
    echo "<a href='listCliente.php'>Volver</a>";
}
