<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/lib/bootstrap.min.css">
  <script src="/lib/jquery-1.12.2.min.js"></script>
  <script src="/lib/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/css/footer.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/css/header.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/css/perfil.css">
  <script src="<?php echo base_url(); ?>/public/assets/js/validaciones.js"></script>

  <style>
    .profile-head {
      transform: translateY(5rem)
    }

    .cover {
      background-image: url(https://images.unsplash.com/photo-1530305408560-82d13781b33a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80);
      background-size: cover;
      background-repeat: no-repeat
    }

    body {
      background: #654ea3;
      background: linear-gradient(to right, #e96443, #904e95);
      min-height: 100vh
    }
  </style>

</head>

<body class="p-1 mb-1 bg-dark">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-1" id="myLinks">
    <a class="navbar-brand btn-outline-info" href="<?php echo base_url(); ?>/public/home">Welcome</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>/public/registro">Registro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>/public/perfiles">Perfiles</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url(); ?>/public/contactenos">Contactenos <span class="sr-only"></span></a>
        </li>
        <form class="d-flex">
        <li class="nav-item active">
          <a class="btn btn-outline-info" href="<?php echo base_url(); ?>/public/anfitrion"><?php echo (session("nombre")) . " " . (session("apellido")); ?> <span class="sr-only"></span></a>
        </li>
        </form>
        </li>
      </ul>
    </div>
  </nav>
  

  <div class="row py-5 px-4">
    <div class="col-md-6 mx-auto">
      <!-- Profile widget -->
      <div class="bg-white shadow rounded overflow-hidden">
        <div class="px-4 pt-0 pb-4 cover">
          <div class="media align-items-end profile-head">
            <div class="profile mr-3"><img src="https://github.com/DanielDiax/ImgTallerM2/blob/main/tanjiro.jpg?raw=true" alt="..." width="130" class="rounded mb-2 img-thumbnail"></div>
            <div class="media-body mb-5 text-white">


            <a class="navbar-brand btn btn-outline-info mb-0" href="<?php echo base_url(); ?>/public/salir">Logout</a>
              <h3 class="text-info" name="nombre"><?php echo (session("nombre")) . " " . (session("apellido")); ?></h3>
              <p class="font-italic mb-0 mt-3"><?php echo (session("ciudad")); ?></p>
            </div>
          </div>
        </div>
        <div class="bg-light p-4 d-flex justify-content-end text-center">
        </div>
        <div class="px-4 py-3">
          <h5 class="mb-0">Mi Info</h5>
          <div class="p-4 rounded shadow-sm bg-light">
            <p class="font-italic mb-0 mt-3"><?php echo (session("descripcion")); ?></p>
            <p class="font-italic mb-0 mt-3"><?php echo (session("pais")); ?></p>
            <p class="font-italic mb-0 mt-3"><?php echo (session("email")); ?></p>
          </div>
        </div>
        <div class="py-4 px-4">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <h5 class="mb-0">Mis Apartamentos</h5><a href="#" class="btn btn-link text-muted">Mostrar Todos</a>
          </div>
          <div class="row">
            <?php
            foreach ($infoApartamentos as $apartamento) {

              $deleteApart = base_url() . "/public/eliminar-Apartamento?id={$apartamento->id}";
              $UpdateApart = base_url() . "/public/update_Apartamento?id={$apartamento->id}";


              if (session('id') == $apartamento->id_usuarios) {


                $template =

                  "
          
          <div class='col-lg-6 mb-2 pr-lg-1'><img src='{$apartamento->imagen}' alt='' href='' class='img-fluid rounded shadow-sm'>
          <a href='{$deleteApart}' class='btn btn-danger mt-2'>Eliminar</a>
          <a href='{$UpdateApart}' class='btn btn-info mt-2'>Actualizar</a></div>
          
          ";
          
                echo ($template);
              };
            };
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>

  <div class="container">

  <div class="me-5 ms-5  bg-dark bg-gradient text-info mt-5  border fs-4 border-3  rounded-3 p-3 ml-4">
    <h1 class="text-center p-4">Añadir Hospedaje</h1>
    <form id="formAparta" method="POST" action="<?php echo base_url(); ?>/public/anfit-Apartamento" onsubmit="CrearApartamento(boton)" class="row g-3 needs-validation">
      <div class="col-md-6">
        <label for="" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Ubicación</label>
        <input type="text" class="form-control" id="ubicacion" name="ubicacion" required>
      </div>
      <div class="col-12">
        <label for="" class="form-label">Descripcion</label>
        <textarea class="form-control" id="descrip" name="descrip" required rows="3" required placeholder="# de personas, mascotas, fumar, etc:"></textarea>

      </div>
      <div class="col-12">
        <label for="" class="form-label">Comodidades</label>
        <textarea class="form-control" id="comod" name="comod" required rows="3" required placeholder="# de habitaciones, zonas verdes, Piscina, etc:"></textarea>
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">Pais</label>
        <input type="text" class="form-control" required name="pais" id="pais">
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label">Ciudad</label>
        <select id="inputState" name="ciudad" id="ciudad" class="form-select">
          <option selected value="Medellin">Medellin</option>
          <option value="Santa Marta">Santa Marta</option>
          <option value="Bogota">Bogota</option>
          <option value="Cartagena">Cartagena</option>
          <option value="Cali">Cali</option>
        </select>
      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label">Fecha Publicación</label>
        <input type="date" class="form-control" id="fecha" name="fecha" required>
      </div>
      <div class="col-md-6">
        <label for="" class="form-label">Dirección Image</label>
        <input type="text" class="form-control" required id="dirUrl" name="dirUrl" placeholder="URL-Image">
      </div>
      <div class="col-md-6">
        <label for="" class="form-label">Precio noche</label>
        <input type="text" class="form-control" required id="valor" name="valor" placeholder="$150.000">
      </div>
      <div>
        <span id="error"></span>
      </div>
      <div class="d-grid gap-2 p-4">
        <button type="submit" id="btCrear" name="btCrear" class="btn  btn-lg btn-info">Crear</button>
      </div>

    </form>

  </div>

  </div>
  </div>

</div>

</body>