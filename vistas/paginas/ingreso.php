<div class="container-fluid">

        <div class="container py-5">

            <div class="d-flex justify-content-center text-center py-3">

                <form class="p-5 bg-light" method="post">

                    <div class="form-group">

                        <label for="email">Ingrese el correo:</label>
            
                        <div class="input-group">
                            
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
            
                            <input type="text" class="form-control" id="email" name="ingresoEmail">
            
                        </div>
                        
                    </div>

                    <div class="form-group">

                        <label for="clave">Ingrese la contraseña:</label>
            
                        <div class="input-group">
                            
                            <div class="input-group-prepend">

                                <span class="input-group-text">

                                    <i class="fas fa-lock"></i>

                                </span>

                            </div>
            
                            <input type="password" class="form-control" id="clave" name="ingresoPasword">
            
                        </div>
            
                    </div>
            
                    <?php

                    $ingreso = new ControladorRegistro();
                    $ingreso -> ctrIngreso();

                    ?>

                    <button type="submit" class="btn btn-primary mt-2">Ingresar</button>
                    
                </form>

            </div>

          </div>  



    </div>