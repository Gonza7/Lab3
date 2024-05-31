<?php
include ("../conexion.php");
$id=$_POST["id"];
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
$sql="UPDATE revision SET fingreso='$ing', fegreso='$egr', estado='$est',
cambio_filtro='$fil',cambio_aceite='$ace',cambio_freno='$fre',descripcion='$des',cod_auto=$aut 
WHERE cod_revision=$id";
$res=mysqli_query($con,$sql);
if($res){
    header("Location:listRevision.php");
}else{
    echo "<br>Error<br>";
    echo "<a href='modRevision.php?id=$id'>Volver</a>";
}