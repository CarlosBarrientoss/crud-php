<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PHP</title>
    <link rel="stylesheet" href="vistas/css/styles.css">
    <!-- Latest compiled Fontawesome-->
	<script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>
</head>
<body>

    <!-- <div class="container-fluid">
        <h1 class="text-center py-3"> Mi primer PHP </h1>
    </div> -->

    <div class="container-fluid bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <ul class="nav nav-justified py-2 nav-pills">
            <?php if (isset($_GET["pagina"])): ?>

                <?php if ($_GET["pagina"] == "registro"): ?>

                    <li class="nav-item">
                        <a href="index.php?pagina=registro" class="nav-link active">Registro</a>
                    </li>

                <?php else: ?>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pagina=registro">Registro</a>
                    </li>

                <?php endif ?>

                
                <?php if ($_GET["pagina"] == "ingreso"): ?>

                    <li class="nav-item">
                        <a href="index.php?pagina=ingreso" class="nav-link active">Ingreso</a>
                    </li>

                <?php else: ?>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                </li>

                <?php endif ?>


                <?php if ($_GET["pagina"] == "inicio"): ?>

                <li class="nav-item">
                    <a href="index.php?pagina=inicio" class="nav-link active">Inicio</a>
                </li>

                <?php else: ?>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
                </li>

                <?php endif ?>


                <?php if ($_GET["pagina"] == "inventario"): ?>

                <li class="nav-item">
                    <a href="index.php?pagina=inventario" class="nav-link active">Inventario</a>
                </li>

                <?php else: ?>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=inventario">Inventario</a>
                </li>

                <?php endif ?>


                <?php if ($_GET["pagina"] == "salir"): ?>

                <li class="nav-item">
                    <a href="index.php?pagina=salir" class="nav-link active">Salir</a>
                </li>

                <?php else: ?>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                </li>

                <?php endif ?>

            <?php else: ?>
            </ul>

            <ul class="nav nav-justified py-2 nav-pills">
                <li class="nav-item">
                    <a href="index.php?pagina=registro" class="nav-link">Registro</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?pagina=ingreso" class="nav-link">Ingreso</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?pagina=inicio" class="nav-link active">Inicio</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?pagina=inventario" class="nav-link">Inventario</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?pagina=salir" class="nav-link">Salir</a>
                </li>
            </ul>
            <?php endif ?>
        </div>



    <div class="container-fluid">
		
		<div class="container py-5">

			<?php 

				#ISSET: isset() Determina si una variable está definida y no es NULL

				if(isset($_GET["pagina"])){

					if($_GET["pagina"] == "registro" ||
					   $_GET["pagina"] == "ingreso" ||
					   $_GET["pagina"] == "inicio" ||
                       $_GET["pagina"] == "inventario" ||
					   $_GET["pagina"] == "salir"){

						include "paginas/".$_GET["pagina"].".php";

					}else{

						include "paginas/error404.php";
					}


				}else{

					include "paginas/registro.php";

				}

				

			 ?>

		</div>
        </nav>
	</div>

 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>