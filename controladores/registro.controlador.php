<?php
#require_once "./modelos/conexion.php";
require_once "./modelos/registro.modelo.php";
class ControladorRegistro{

    static public function ctrRegistro(){

        if(isset($_POST["registroNombre"])){

            $tabla = "registro";

            $datos = array(
                "nombre" => $_POST["registroNombre"],
                "telefono" => $_POST["registroTelefono"],
                "correo" => $_POST["registroCorreo"],
                "clave" => $_POST["registroClave"]            

            );

            $respuesta = ModeloRegistro::mdlRegistro($tabla, $datos);

            return $respuesta;

        }

    }

    /*=============================================
    Seleccionar Registros
    =============================================*/

    static public function ctrSeleccionarRegistro(){

        $tabla = "registro";

        $respuesta = ModeloRegistro::mdlseleccionarregistro($tabla, null,null);

        return $respuesta;
    }

        
    /*=============================================
    Ingresar Usuario
    =============================================*/

    public function ctrIngreso(){

        if(isset ($_POST["ingresoEmail"])){

            $tabla = "registro";
            $item = "correo";
            $valor = $_POST["ingresoEmail"];

            $respuesta = ModeloRegistro::mdlSeleccionarRegistro($tabla, $item, $valor);

            if($respuesta["correo"] == $_POST["ingresoEmail"] && $respuesta["clave"] == $_POST["ingresoPasword"]){ 

                $_SESSION["validarIngreso"] = "ok";

                echo '<script>

                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }

                    window.location = "index.php?pagina=inicio";

                </script>';

            } else {

                echo '<script>

                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }

                </script>';

                echo '<div class="alert alert-success">la contraseña no es valida</div>';
            }


        }

    }


}