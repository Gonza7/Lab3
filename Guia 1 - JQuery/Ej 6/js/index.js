$("document").ready(function(){
    $("#cant1").prop('disabled',true);
    $("#cant2").prop('disabled',true);
    $("#cant3").prop('disabled',true);
    $("#s1").prop('disabled',true);
    $("#s2").prop('disabled',true);
    $("#s3").prop('disabled',true);
    $("#art1").change(function(){
        var art= $("#art1").val();
        $("#pu1").val(parseFloat(art));
        $("#cant1").prop('disabled',false);
        $("#s1").prop('disabled',false);
        $("#s1").click(function(){
            let cant= parseFloat($("#cant1").val());
            if(art!="Elija una opcion"){
                if(cant>0){
                    let sub1=parseFloat(art)*cant;
                    $("#sub1").val(sub1);
                }else{
                    alert("Ingrese la cantidad de productos");
                }
            }else{
                alert("Seleccione una opción válida");
            }
        });
        return sub1;
    });
    $("#art2").change(function(){
        var art= $("#art2").val();
        $("#pu2").val(parseFloat(art));
        $("#cant2").prop('disabled',false);
        $("#s2").prop('disabled',false);
        $("#s2").click(function(){
            let cant= parseFloat($("#cant2").val());
            if(art!="Elija una opcion"){
                if(cant>0){
                    let sub2=parseFloat(art)*cant;
                    $("#sub2").val(sub2);
                }else{
                    alert("Ingrese la cantidad de productos");
                }
            }else{
                alert("Seleccione una opción válida");
            }
        });
        return sub2;
    });
    $("#art3").change(function(){
        var art= $("#art3").val();
        $("#pu3").val(parseFloat(art));
        $("#cant3").prop('disabled',false);
        $("#s3").prop('disabled',false);
        $("#s3").click(function(){
            let cant= parseFloat($("#cant3").val());
            if(art!="Elija una opcion"){
                if(cant>0){
                    let sub3=parseFloat(art)*cant;
                    $("#sub3").val(sub3);
                }else{
                    alert("Ingrese la cantidad de productos");
                }
            }else{
                alert("Seleccione una opción válida");
            }
        });
        return sub3;
    });
    $("#tot").click(function(){
        let sub1=parseFloat($("#pu1").val())*parseFloat($("#cant1").val());
        let sub2=parseFloat($("#pu2").val())*parseFloat($("#cant2").val());
        let sub3=parseFloat($("#pu3").val())*parseFloat($("#cant3").val());
        if(isNaN(sub1)){
            sub1=0;
        }
        if(isNaN(sub2)){
            sub2=0;
        }
        if(isNaN(sub3)){
            sub3=0;
        }
        let tot=sub1+sub2+sub3;
        $("#t").val(tot);
    });
    $("#elim").click(function(){
        $("#art1,#art2,#art3").val("Elija una opcion");
        $("#t,#sub1,#sub2,#sub3,#cant1,#cant2,#cant3,#pu1,#pu2,#pu3").val(null);
        $("#cant1").prop('disabled',true);
        $("#cant2").prop('disabled',true);
        $("#cant3").prop('disabled',true);
        $("#s1").prop('disabled',true);
        $("#s2").prop('disabled',true);
        $("#s3").prop('disabled',true);
    });
});