<?php
include("../conexion.php");
$ing=$_POST["ing"];
$egr=$_POST["egr"];
$est=$_POST["est"];
$aut=$_POST["aut"];
$des=$_POST["des"];
$fil=$ace=$fre="No";
if(isset($_POST["fil"])){
    $fil="Si";
}
if(isset($_POST["ace"])){
    $ace="Si";
}
if(isset($_POST["fre"])){
    $fre="Si";
}
$sql="INSERT INTO revision
(fingreso,fegreso,estado,cambio_filtro,cambio_aceite,cambio_freno,descripcion,cod_auto) VALUES 
('$ing','$egr','$est','$fil','$ace','$fre','$des',$aut)";

$res=mysqli_query($con,$sql);

if($res){
    header("Location:listRevision.php");
}else{
    echo "<br>Error<br>";
    echo "<a href='regRevision.php'>Volver</a>";
}