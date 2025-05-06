
<div class="container-fluid">
		
	<div class="container py-5">
<h1>Actualizar</h1>
        <div class="d-flex justify-content-center text-center py-3">

            <form class="p-5 bg-light" method="post">
            
                <div class="form-group">

                    <label for="nombre">Nombre:</label>
            
                    <div class="input-group">
                            
                            <div class="input-group-prepend">

                                <span class="input-group-text">

                                    <i class="fas fa-user"></i>

                                </span>

                            </div>
            
                        <input type="text" class="form-control" id="nombre" name="actualizarNombre">
            
                    </div>
                        
                </div>

                <div class="form-group">

                    <label for="telefono">Teléfono:</label>
            
                    <div class="input-group">
                            
                        <div class="input-group-prepend">

                            <span class="input-group-text">

                                <i class="fas fa-user"></i>

                            </span>

                        </div>
            
                        <input type="text" class="form-control" id="telefono" name="actualizarTelefono">
            
                    </div>
                        
                </div>
            
                <div class="form-group">
            
                    <label for="correo">Correo electrónico:</label>
            
                    <div class="input-group">
                            
                        <div class="input-group-prepend">

                            <span class="input-group-text">

                                <i class="fas fa-envelope"></i>

                            </span>

                        </div>
            
                        <input type="email" class="form-control" id="correo" name="actualizarCorreo">
                        
                    </div>
                        
                </div>
            
                <div class="form-group">

                    <label for="clave">Contraseña:</label>
            
                    <div class="input-group">
                            
                        <div class="input-group-prepend">

                            <span class="input-group-text">

                                <i class="fas fa-lock"></i>

                            </span>

                        </div>
            
                        <input type="password" class="form-control" id="clave" name="actualizarClave">
            
                    </div>
            
                </div>
            
                <?php

                    /*=============================================
                    FORMA EN QUE SE INSTA­NCIA LA CLASE DE UN MÉTODO ESTÁTICO
                    =============================================*/

                    // Método estático para registrar
                    $actualizar = ControladorRegistro::ctrActualizar();

                    if ($actualizar === 'ok') {
                        // Evita reenvío del formulario al refrescar la página
                        //uso de heredoc (<<<HTML):
                        //Facilita la inclusión de HTML y JS con múltiples líneas sin necesidad de múltiples echo y mejora la legibilidad.
                        echo <<<HTML
                            <script>
                                if (window.history.replaceState) {
                                    window.history.replaceState(null, null, window.location.href);
                                }
                            </script>
                            <div class="alert alert-success">El usuario ha sido actualizadp</div>
                        HTML;
                    }

                ?>



                <button type="submit" class="btn btn-primary">Actualizar</button>
            
            </form>
            
        </div>

    </div>

</div>
