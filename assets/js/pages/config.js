$(function(){
    /***************************************************/
    /*****************  AUTENTICACIÓN   ****************/
    /***************************************************/
    $("#bingresar").click(function(e){
        e.preventDefault();
        Validar();
        return false;
    });

    $("#usuario").keypress(function(e){
        if(e.which == 13){
            Validar();
            return false;
        }
    });

    $("#clave").keypress(function(e){
        if(e.which == 13){
            Validar();
            return false;
        }
    });

    /***************************************************/
    /*****************  FUNCIÓN VALIDAR   **************/
    /***************************************************/

    function Validar(){
        var usuario = $("#usuario").val();
        var clave = $("#clave").val();

        if(usuario == ''){
            alert("¡Error, debe ingresar el usuario!");
            $("#usuario").focus();
            return false;
        }

        if(clave == ''){
            alert("¡Error, debe ingresar la contraseña!");
            $("#usuario").focus();
            return false;
        }

        autenticarUsuario();
    }

    /***************************************************/
    /***************  FUNCIÓN AUTENTICAR   *************/
    /***************************************************/

    function autenticarUsuario(){
        $("#proceso").val('IniciarProceso');
        var EnviarDatos = $("#fapp").serialize();
        $.ajax({
            data: EnviarDatos,
            url: 'config/validar-usuarios.php',
            type: 'POST',
            dataType: 'json',
            beforeSend: function(){
                $("#bingresar").html("PROCESANDO DATOS, ESPERE...");
            },
            success: function(datos){
                var respuesta = datos.respuesta;
                if(respuesta == 'SI'){
                    $("#bingresar").html('REDIRECCIONANDO, ESPERE...');
                    setTimeout(function(){
                        window.location.href = "dashboard.php";
                    }, 1000)
                }else{
                    $("#bingresar").html('¡ERROR, DATOS INCORRECTOS!');
                    setTimeout(function(){
                        $("#usuario").val('');
                        $("#clave").val('');
                        $("#bingresar").html("INGRESAR AHORA");
                        $("#usuario").focus();
                    }, 2000)
                }
            }
        });
    }
});