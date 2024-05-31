$(document).ready(function() {
    $("#reg").click(function(event) {
        var ing=$("#ing").val();
        var egr=$("#egr").val();
        var est=$("#est").val();
        var aut=$("#aut").val();
        let fi= new Date(ing);
        let fe= new Date(egr);
        if(ing==""||egr==""||est==null||aut==null||(fe<=fi)){
            alert("Error");
            event.preventDefault();
        }
    });
});