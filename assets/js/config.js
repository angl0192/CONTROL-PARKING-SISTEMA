$(function(){
    /*********************************************/
    /*********************************************/
    /* var tipoUsuario = $('input:radio[name=tipoUsuario]:checked').val();
    if (tipoUsuario == 'Cliente') {
        $("#clientetodotec").show();
        $("#usuariotodotec").hide();
    } else {
        $("#usuariotodotec").show();
        $("#clientetodotec").hide();
    }
    $("input:radio[name=tipoUsuario]").click(function() {
        var tipoUsuario = $('input:radio[name=tipoUsuario]:checked').val();
        if (tipoUsuario == 'Cliente') {
            $("#clientetodotec").show();
            $("#usuariotodotec").hide();
        } else {
            $("#usuariotodotec").show();
            $("#clientetodotec").hide();
        }
    }); */
     var tipoUsuario = $('#tipoUsuario').val();
     if(tipoUsuario=='Usuario'){
        $("#usuariotodotec").show();
        $("#clientetodotec").hide();
     }else{
        $("#clientetodotec").show();
        $("#usuariotodotec").hide();
     }    
    /*********************************************/
    /*************** AUTENTICACION ***************/
    /*********************************************/
    $("#bingresa").click(function(e){
        e.preventDefault()
        Validar();
        return false;
    })
    /*********************************************/
    $("#usuario").keypress(function(e){
        if(e.which == 13){
            Validar();
            return false;
        }
    })
    /*********************************************/
    $("#clave").keypress(function(e){
        if(e.which == 13){
            Validar();
            return false;
        }
    })
    /*********************************************/
    $("#cod_servicio").keypress(function(e){
        if(e.which == 13){
            Validar();
            return false;
        }
    })
    /*********************************************/
    function Validar(){
        var tipoUsuario = $('input:radio[name=tipoUsuario]:checked').val();
        if (tipoUsuario == 'Cliente') {
            var cod_servicio   = $("#cod_servicio").val();
            if(cod_servicio==''){
                alert("ingresar orden de servicio o email");
                $("#cod_servicio").focus();
                return false;
            }
        } else {
            var usuario = $("#usuario").val();
            var clave   = $("#clave").val();
            if(usuario==''){
                alert("¡Error, debe ingresar su usuario!");
                $("#usuario").focus();
                return false;
            }
            if(clave==''){
                alert("¡Error, debe ingresar su contraseña!");
                $("#clave").focus();
                return false;
            }
        }        
        autenticarUsuario();
    }
    /*********************************************/
    function autenticarUsuario(){
        $("#proceso").val('IniciarProceso');
        var EnviarDatos = $("#formulariologin").serialize();
        $.ajax({
            data        : EnviarDatos,
            url         : 'config/validar-usuarios.php',
            type        : 'POST',
            dataType    : 'json',
            beforeSend   : function(){
                $("#bingresa").val('Procesando Datos, Espere...');
            },
            success     : function(datos){
                var respuesta = datos.respuesta;
                if(respuesta=='SI'){
                    $("#bingresa").val('Redireccionando, Espere...');
                    setTimeout(function(){
                        window.location.href = "dashboard.php";
                    }, 3000)
                }else{
                    $("#bingresa").val('¡Error, datos incorrectos!');
                    setTimeout(function(){
                        $("#usuario").val('');
                        $("#clave").val('');
                        $("#bingresa").val('INGRESAR');
                        $("#usuario").focus();
                        location.reload();
                    },3000)
                }
            }
        })
    }
    /*********************************************/
})