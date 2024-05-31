$("document").ready(function(){
    $("#reg").click(function(){
        let mar=$("#mar").val();
        let mod=$("#mod").val();
        let col=$("#col").val();
        let pv=parseFloat($("#pv").val());
        let cli=parseInt($("#cli").val());
        console.log(mar,mod,col,pv,cli);
        if(mar==""||mod==""||col==""||isNaN(pv)||isNaN(cli)){
            alert("Error");
            event.preventDefault();
        }
    });
});