$("document").ready(function(){
    $("#ok").click(function(){
        let ser=$("#ser").val();
        switch(ser) {
            case "Dr. House":
                $("#dia").val("Lunes");
                $("#hor").val("18:00");
                break;
            case "Prison Break":
                $("#dia").val("Martes");
                $("#hor").val("19:00");
                break;
            case "The Walking Dead":
                $("#dia").val("Miercoles");
                $("#hor").val("18:00");
                break;
            case "Game of Thrones":
                $("#dia").val("Jueves");
                $("#hor").val("20:00");
                break;
            default:
                alert("Seleccione una opción válida");
                break;
        }
    });
    $("#elim").click(function(){
        $("#ser").val("Elija una opcion");
        $("#dia").val(null);
        $("#hor").val(null);
    });
});