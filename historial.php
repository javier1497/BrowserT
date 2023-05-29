<?php
require_once './ajax/config.php';
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/main.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">

    <title>Browser T.</title>
</head>
<?php
  $historiales = $mysqli->query("SELECT * FROM historial");
?>

<body>
    <script src="./js/mapa.js"></script>

 
    
  <!--========================================================== -->
                        <!-- ENCABEZADO -->
  <!--========================================================== -->
    <header class="container-fluid bg-primary d-flex justify-content-center">
        <p class="text-light mb-0 p-2 fs-6">Realizado por Javier Serrano - Cont. 3006583284 </p>
    </header>

    <nav  class="navbar navbar-expand-lg navbar-light bg-light"  id="menu">
        <div class="container">
          <a class="navbar-brand" href="https://browsertravelsolutions.com/">
              <span class="fs-5 text-primary fw-bold">Browser Travel</span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.html">Inicio</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
<!--========================================================== -->
                        <!-- SECCION HISTORIAL-->
<!--========================================================== -->


    <section role="main" class="content-body pb-0">
        <div class="card card-primary mb-4">
            <header class="card-header">
                <h2 class="card-title">Historial</h2>
            </header>

            <div class="card-body" >
                <table class="table table-bordered table-striped mb-0" id="zonasTable">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Acciones</th>
                            <th scope="col">Cod</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Longitud</th>
                            <th scope="col">Latitud</th>
                            <th scope="col">Humeda</th>
                            <th scope="col">Temperatura</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while ($historial = $historiales->fetch_object()) { ?>
                        <tr>
                            <td>
                                <div class="align-middle text-center">
                                    <div class="btn-group">
                                    <a href="#modalEliminar" data-codigo="<?php echo $historial->id ?>" class="btn btn-danger modal-eliminar"><i class="fas fa-trash-alt fa-fw">Guardado</i></a>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle"><?php echo $historial->id ?></td>
                            <td class="align-middle"><?php echo $historial->fecha ?></td>
                            <td class="align-middle"><?php echo $historial->usuario ?></td>                    
                            <td class="align-middle"><?php echo $historial->long ?></td> 
                            <td class="align-middle"><?php echo $historial->lat ?></td> 
                            <td class="align-middle"><?php echo $historial->humeda ?></td> 
                            <td class="align-middle"><?php echo $historial->temperatura ?></td> 
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            
            
        </div>
    </section>
    




<footer class="w-100  d-flex  align-items-center justify-content-center flex-wrap">
  <p class="fs-5 px-3  pt-3">&copy; Todos Los Derechos Reservados 2023</p>
  <div id="iconos" >
      <a href="#"><i class="bi bi-facebook"></i></a>
      <a href="#"><i class="bi bi-twitter"></i></a>
      <a href="#"><i class="bi bi-instagram"></i></a>  
  </div>
</footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> 
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="./js/main.js"></script>
  </body>
</html>

