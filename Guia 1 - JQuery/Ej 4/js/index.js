$("document").ready(function(){
   $("#ok").click(function(){
    let fn= new Date($("#fn").val());
    let hoy = new Date();
    let edad = hoy.getFullYear() - fn.getFullYear();
    let m = hoy.getMonth() - fn.getMonth();
    let d = hoy.getDate() - fn.getDate();
    if(m<0||(m==0&&d<=0)){
        edad--;
    }
    if(edad<0||(edad==0&&m<0)||(edad==0&&m==0&&d<0)){
        alert("Ingrese una fecha válida");
    }else{
        $("#edad").val(edad);
    }
   });
   $("#elim").click(function(){
    $("#fn").val(null);
    $("#edad").val(null);
   });
});