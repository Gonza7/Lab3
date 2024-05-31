$("document").ready(function() {
    $("#des,#has").change(function(){
        let des=$("#des").val();
        let has=$("#has").val();
        console.log(des,has);
        if(des!=""&&has!=""){
            $("#listF").prop("disabled",false);
        }
    });
    $("#listF").click(function(){
        let d= new Date($("#des").val());
        let h= new Date($("#has").val());
        console.log(d,h);
        if(des==""||has==""||(h<d)){
            alert("Error");
            event.preventDefault();
        }
    });
});