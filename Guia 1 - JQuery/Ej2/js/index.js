$("document").ready(function(){
    $("#estado").click(function(){
        let n1= parseFloat($("#n1").val());
        let n2= parseFloat($("#n2").val());
        let as= parseFloat($("#as").val());
        if(n1>10||n1<0||n2>10||n2<0){
            alert("Error, ingrese un numero valido");
        }else{
            if(as<70){
                console.log("lib");
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
});