$(document).ready(function(){
    console.log("Ok");
    $("#suma").click(function(){
       console.log("suma");
       let n1=$("#numero1").val();
       let n2=$("#numero2").val();
       let res=parseFloat(n1)+parseFloat(n2);
       console.log(res);
       $("#res").val(res);
    });
    $("#resta").click(function(){
        console.log("resta");
        let n1=$("#numero1").val();
        let n2=$("#numero2").val();
        let res=parseFloat(n1)-parseFloat(n2);
        console.log(res);
        $("#res").val(res);
    });
    $("#mult").click(function(){
        console.log("multiplicacion");
        let n1=$("#numero1").val();
        let n2=$("#numero2").val();
        let res=parseFloat(n1)*parseFloat(n2);
        console.log(res);
        $("#res").val(res);
    });
    $("#div").click(function(){
        console.log("division");
        let n1=$("#numero1").val();
        let n2=$("#numero2").val();
        if(n2!=0){
            let res=parseFloat(n1)/parseFloat(n2);
            console.log(res);
            $("#res").val(res);
        }else{
            console.log("error");
            $("#res").val("Error");
        }
        
    });
    $("#elim").click(function(){
        console.log("borrar");
        $("#numero1").val(null);
        $("#numero2").val(null);
        $("#res").val(null);
    });
});