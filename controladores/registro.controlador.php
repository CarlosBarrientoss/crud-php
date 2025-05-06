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
//"clave" => password_hash($_POST["registroClave"], PASSWORD_DEFAULT)
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

    /*=============================================
    Ingresar Usuario
    =============================================*

public function ctrIngreso() {

    if (isset($_POST["ingresoEmail"])) {

        $tabla = "registro";
        $item = "correo";
        $valor = $_POST["ingresoEmail"];

        $respuesta = ModeloRegistro::mdlSeleccionarRegistro($tabla, $item, $valor);

        // Verificamos que el correo exista y que la contraseña coincida
        if ($respuesta && $respuesta["correo"] == $_POST["ingresoEmail"] &&
            password_verify($_POST["ingresoPasword"], $respuesta["clave"])) {

            $_SESSION["validarIngreso"] = "ok";

            echo '<script>
                if (window.history.replaceState) {
                    window.history.replaceState(null, null, window.location.href);
                }
                window.location = "index.php?pagina=inicio";
            </script>';

        } else {
            echo '<script>
                if (window.history.replaceState) {
                    window.history.replaceState(null, null, window.location.href);
                }
            </script>';

            echo '<div class="alert alert-danger">Correo o contraseña incorrectos</div>';
        }
    }
}
*/
    /*=============================================
    Actualizar Usuario
    =============================================*/

    public static function ctrActualizar() {
        if (isset($_POST['actualizarNombre'], $_POST['actualizarTelefono'], $_POST['actualizarCorreo'], $_POST['actualizarClave'])) {

            $tabla = "registro";

            $datos = array(
                "id" => $_GET["id"], 
                "nombre" => $_POST["actualizarNombre"],
                "telefono" => $_POST["actualizarTelefono"],
                "correo" => $_POST["actualizarCorreo"],
                "clave" => password_hash($_POST["actualizarClave"], PASSWORD_DEFAULT)
            );

            $respuesta = ModeloRegistro::mdlActualizarRegistro($tabla, $datos);

            return $respuesta;
        }

        return null;
    }

}