<?php
class controladorFormularios
{
    static public function ctrRegistro()
    {
        if (isset($_POST["registroNombre"])) {
            $datos = array(
                "nombre" => $_POST["registroNombre"],
                "correo" => $_POST["registroEmail"],
                "contraseña" => $_POST["registroPassword"]
            );
            $tabla = "registro";
            $respuesta = formulariosModelo::mdlRegistro($tabla, $datos);
            return $respuesta;
        }
    }
    public function ctrLogin()
    {
        if (isset($_POST["loginEmail"])) {
            $datos = array(
                "email" => $_POST["loginEmail"],
                "password" => $_POST["loginPassword"]
            );
            $tabla = "registro";
            $respuesta = formulariosModelo::mdlLogin($tabla, $datos);
            if ($respuesta != null) {
                $_SESSION["IngresoValido"] = "admitido";
                echo '<script>
                if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                }
                </script>';
                echo '<div class="alert alert-success">admitido</div>';
            } else {
                echo '<script>
                if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                }
                </script>';
                echo '<div class="alert alert-danger">Error!! Email o contraseña incorrecta</div>';
            }
        }
    }
}
