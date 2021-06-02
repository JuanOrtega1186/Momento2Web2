


<div class="container">
<div class='row'>

    <?php

        foreach($usuarios as $usuario){

            $deletePerfil = base_url()."/public/delete-perfiles?id={$usuario->id}";
            $updateregistro= base_url()."/public/update_registro?id={$usuario->id}";

        
                $template = "
                <div class='col-lg-4 col-md-4 col-sm-12 mt-5'>
                <div class=''>
                <div class='text-center card-box'>
                    <div class='member-card pt-2 pb-2'>
                        <div class='thumb-lg member-thumb mx-auto'><img src='https://github.com/DanielDiax/ImgTallerM2/blob/main/tanjiro.jpg?raw=true' class='rounded-circle img-thumbnail' alt='profile-image'></div>
                        <div class=''>
                        <h4 class='card-title text-light rounded-pill text-center  ' name='nombre'>{$usuario->nombre} {$usuario->apellido}</h4>
                            <p class='text-dark'>Ciudad <span>| </span><span><a href='#' name='ciudad' class='text-pink'>{$usuario->ciudad}</a></span></p>
                            <p class='text-dark'>Pais <span>| </span><span><a href='#' class='text-pink'>{$usuario->pais}</a></span></p>
                            <p class='text-dark'>Correo <span>| </span><span><a href='#' class='text-pink'>{$usuario->correo}</a></span></p>
                        </div>
                        <a href='{$deletePerfil}' class='btn btn-danger'>Eliminar</a>
                        <a href='{$updateregistro}' class='btn btn-info'>Actualizar</a>
                        <div class='mt-4'>
                            <div class='row'>
                                <div class='col-4'>
                                </div>
                                <div class='col-4'>
                                    <div class='mt-3'>
                                        <p class='mb-0 text-dark' >{$usuario->rol}</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>";

                echo $template;
        }   
    ?>
    <hr />
    <div class="row">
            <div class="col-12">
                <div class="text-right">
                    <ul class="pagination pagination-split mt-0 float-right">
                        <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span> <span class="sr-only">Previous</span></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span> <span class="sr-only">Next</span></a></li>
                    </ul>
                </div>
            </div>
</div>

</div>      




           
        






            