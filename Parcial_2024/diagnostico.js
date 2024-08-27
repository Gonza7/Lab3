$(document).ready(function() {
    $("#pes").change(function(){
        let pes=$("#pes").val();
        if(pes>30){
            $("#tam").val("grande");
        }else if(pes>=10&&pes<=30){
            $("#tam").val("mediano");
        }else{
            $("#tam").val("pequeño");
        }
    });
});