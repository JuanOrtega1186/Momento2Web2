<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url(); ?>/public/assets/img/1a.jpg" class="d-block " width="100%" height="520px">
    </div>
    <div class="carousel-caption d-none d-lg-block">
      <h1>Explora</h1>
      <h4>
        <p>Para empezar, busca alojamientos o experiencias. Aplica los filtros que quieras, como alojamientos enteros, acceso sin restricción de horario
          o espacios donde se admitan mascotas. También puedes guardar los anuncios que más te gusten en una lista de favoritos.</p>
      </h4>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url(); ?>/public/assets/img/2a.jpg" class="d-block" width="100%" height="520px">
      <div class="carousel-caption d-lg-block">
        <h1>Reserva</h1>
        <h4>
          <p>Una vez que hayas encontrado lo que buscabas, infórmate sobre el anfitrión, lee las reseñas de los huéspedes anteriores y consulta los
            detalles sobre las opciones de cancelación. Después, reserva en unos pocos clics.</p>
        </h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url(); ?>/public/assets/img/3a.jpg" class="d-block" width="100%" height="520px">
      <div class="carousel-caption d-lg-block">
        <h1>Viaja</h1>
        <h4>
          <p>¡Ya lo tienes todo listo! Comunícate con el anfitrión a través de la aplicación para que te dé recomendaciones sobre la zona, puedes hacerle
            preguntas o pedirle consejos. Si necesitas ayuda adicional</p>
        </h4>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>





<div class="container">
  <div class='row'>


    <?php
    foreach ($apartamentos as $apartamento) {
      $UpdateHome = base_url() . "/public/home2";
      $fecha = $apartamento->fecha;

      if ($fecha >= $fechaIni && $fecha <= $fechaFin) {


        $template = " <div  class=' col-sm-12 col-md-6 col-lg-6 mt-5' >

              <form  action='$UpdateHome' methodo='POST'
              <div class='card text-white p-3 mb-4'>
                <img class='card-img  text-center' src='{$apartamento->imagen}' alt='Card image' width='100%' height='450px'>
              
                  <div class='card-img-overlay'>
                  <h4> <p class='badge bg-light text-dark'><a class='badge bg-light text-dark' href='{$apartamento->ubicacion}'>Ubicacion Aquí</a></p></h4>
                    <h1 class='card-text position-absolute top-0 end-0 pt-4 p-4'>{$apartamento->nombre}</h1>
                  
                                  
                  <h2> <p class='card-text mb-5'>{$apartamento->comodidades}</p> </h2>
                   <h1> <p class='badge bg-secondary text-info position-absolute end-0'>{$apartamento->valor}</p></h1>
                        
                   <div class='btn position-absolute bottom-0 end-10 mb-4' role='group' aria-label='Basic mixed styles example'>
                          
                  </div>
                  <h3> <p class='card-text ms-4 position-absolute top-50 start-0 translate-middle-y'>{$apartamento->descripcion}</p></h3>
                  </div>
                  </form>
              </div>";

        echo ($template);
      };
    }

    ?>
  </div>
</div>
