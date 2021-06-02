<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/lib/bootstrap.min.css">
    <script src="/lib/jquery-1.12.2.min.js"></script>
    <script src="/lib/bootstrap.min.js"></script>

<link rel="stylesheet"  href="<?php echo base_url();?>/public/assets/css/header.css">
<link rel="stylesheet" href="<?php echo base_url();?>/public/assets/css/footer.css">
<link rel="stylesheet"  href="<?php echo base_url();?>/public/assets/css/perfil.css">
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
<body class="p-1 mb-1 bg-dark" >

    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-1" id="myLinks" >
        <a class="navbar-brand btn-outline-info" href="<?php echo base_url();?>/public/home">Welcome</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
        
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>/public/registro">Registro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>/public/perfiles">Perfiles</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url();?>/public/contactenos">Contactenos <span class="sr-only"></span></a>
           
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
       
         
        </li>
            </li>
            <a class="btn btn-outline-info"  href="<?php echo base_url();?>/public/login">Login In</a>
          </ul>
        </div>
</nav>









