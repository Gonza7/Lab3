<?php
include("conexion.php");
$mas=$_POST["mas"];
$vet=$_POST["vet"];
$hos=$_POST["hos"];
$fec=$_POST["fec"];
$hor=$_POST["hor"];
$mot=$_POST["mot"];
$temp=$_POST["temp"];
$pes=$_POST["pes"];
$sin=$_POST["sin"];
$tam1=$_POST["tam"];
$jau=0;
$sql="SELECT hora_desde,hora_hasta FROM veterinario WHERE id_veterinario=$vet ";
$res=mysqli_query($con,$sql);
$h=mysqli_fetch_array($res);
if($hor>=$h[0]&&$hor<=$h[1]){
    if($hos=="si"){
        $jau=$_POST["jau"];
        $sql2="SELECT tamaño FROM mascota WHERE id_mascota=$mas";
        $res2=mysqli_query($con,$sql2);
        $tam=mysqli_fetch_array($res2);
        $sql3="SELECT tamaño FROM jaulas WHERE id_jaula=$jau";
        $res3=mysqli_query($con,$sql3);
        $tamj=mysqli_fetch_array($res3);
        if($tam[0]==$tamj[0]){
            if($tam1==$tam[0]){
                $sql4="INSERT INTO diagnostico(id_mascota,id_veterinario,id_jaula,fecha_atencion,hora,
            motivo,temperatura,peso,sintomas) VALUES ($mas,$vet,$jau,'$fec',$hor,'$mot',$temp,$pes,'$sin')";
            $res4=mysqli_query($con,$sql4);
            if($res4){
                mysqli_query($con,"UPDATE jaulas SET estado='ocupado' WHERE id_jaula=$jau");
                header("Location:index.html");
            }else{
                echo "Error";
            }
            }else{
                echo "El peso no corresponde";
            }
            
        }else{
            echo "La jaula no corresponde";
        }
    }else{
        $sql5="INSERT INTO diagnostico(id_mascota,id_veterinario,fecha_atencion,hora,
            motivo,temperatura,peso,sintomas) VALUES ($mas,$vet,'$fec',$hor,'$mot',$temp,$pes,'$sin')";
        $res5=mysqli_query($con,$sql5);
        if($res5){
            mysqli_query($con,"UPDATE jaulas SET estado='ocupado' WHERE id_jaula=$jau");
            header("Location:index.html");
        }else{
            echo "Error";
        }
    }
}else{
    echo "El veterinario no puede atender";
}