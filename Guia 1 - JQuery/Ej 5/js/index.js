$("document").ready(function(){
    $("#ok").click(function(){
        let lib=$("#lib").val();
        let fpre= new Date();
        fpre.setDate(fpre.getDate()+5)
        let a=fpre.getFullYear();
        let m=("0"+(fpre.getMonth()+1)).slice(-2);
        let d=("0"+fpre.getDate()).slice(-2);
        if(lib=="Divergente"||lib=="Insurgente"){
            alert("Solo lectura en sala");
        }else if(lib=="Elija una opcion"){
            alert("Seleccione una opción válida");
        }
        else{
            $("#dev").val(a+"-"+m+"-"+d);
        }
    });
    $("#elim").click(function(){
        $("#lib").val("Elija una opcion");
        $("#dev").val(null);
    });
});