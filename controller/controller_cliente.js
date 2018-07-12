function registrarCliente(){
    var nombre = $("#nombre").val();
    var apellido = $("#apellido").val();
    var ci = $("#ci").val();
    var email = $("#email").val();
    //alert(nombre+"-"+ci+"-"+email);
    var obj ={
        nombre : nombre,
        apellido : apellido,
        ci : ci,
        email : email
    };
    $.ajax({
        type: "POST",
        url : "../model/model_cliente.php",
        data: obj,
        beforeSend:function(object){},
        success:function(data){
            $("#panel_listado").html(data);
        }
    });
}