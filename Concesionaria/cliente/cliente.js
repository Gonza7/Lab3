$("document").ready(function(){
    $("#reg").click(function(){
        let nyap=$("#nyap").val();
        let dir=$("#dir").val();
        let ciu=$("#ciu").val();
        let tel=$("#tel").val();
        let falta=$("#falta").val();
        if(nyap==""||dir==""||ciu==""||tel==""||falta==""){
            alert("Error");
            event.preventDefault();
        }
    });
});