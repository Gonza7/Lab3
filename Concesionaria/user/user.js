$("document").ready(function(){
    $("#nom").on('input',function(){
        $("#cont").prop('disabled', false);
        console.log("1");
    });
    $("#cont").on('input',function(){
        $("#cont2").prop('disabled', false);
        console.log("2");
    });
    $("#cont2").on('input',function(){    
        $("#reg").prop('disabled', false);
        $("#bor").prop('disabled', false);
        console.log("3");
    });
    $("#reg").click(function(){
        var nom=$("#nom").val();
        var cont=$("#cont").val();
        var cont2=$("#cont2").val();
        if(nom==""||cont==""||cont!=cont2){
            alert("error");
            event.preventDefault();
        }
    });
    $("#bor").click(function(){
        $("#reg").prop('disabled', true);
        $("#cont").prop('disabled', true);
        $("#cont2").prop('disabled', true);
    });
});