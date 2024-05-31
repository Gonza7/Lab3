$("document").ready(function() {
    $("#n1,#n2,#as,#ida,idm").change(function(){
        let n1= parseFloat($("#n1").val());
        let n2= parseFloat($("#n2").val());
        let as= parseFloat($("#as").val());
        let al= parseInt($("#ida").val());
        let mat= parseInt($("#idm").val());
        console.log(al);
        console.log(mat);
        if(n1>10||n1<0||n2>10||n2<0||(n1==0 && n2==0 && as==0)||isNaN(al)||isNaN(mat)){
            $("#es").val("Error");
        }else{
            $("#enviar").prop("disabled",false);
            if(as<70){
                $("#es").val("Libre"); 
            }else{
                if(n1>=4&&n2>=4){
                    if(((n1+n2)/2)>=6){
                        console.log("ap");
                        $("#es").val("Aprobado");
                    }else{
                        console.log("reg");
                        $("#es").val("Regular");
                    }
                }else{
                    console.log("des");
                    $("#es").val("Desaprobado");
                }
            }
        }
    });
    $("#borrar").click(function(){
        $("#enviar").prop("disabled", true);
        $("#es").val("Error");
    });
    $("#enviar").click(function(){
        let al=parseInt($("#ida").val());
        let mat=parseInt($("#idm").val());
        if(isNaN(al) || isNaN(mat)){
            alert("Error");
            event.preventDefault();
        }
    });
});