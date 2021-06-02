
<div class="container col-10 col-sm-9 col-md-5 col-lg-4 mt-5 bg-light border radius rounded ">

 <form  method="POST" action="<?php echo base_url().'/public/login'?>" class="row g-3 bg-light text-grey rounded">
    <div class="form-group">
    <p class="h1 text-center bg-dark text-info p-2 rounded">Login</p>
        <label class="sr-only mt-3 mb-2" for="ejemplo_email_2 ">Correo</label>
        <input type="email" class="form-control input-lg" id="email" name="email"
            placeholder="Introduce tu email" required>
         
    </div>
    <div class="form-group mt-3">
        <label class="sr-only mb-2" for="ejemplo_password_2">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password"
            placeholder="Contraseña" required>
            
    </div>
   
  
    <div class="form-group  text-center">
             <h6><span class="label label-info text-info bg-dark " id="error_login"></span></h6>
    </div>
    <button type="submit" onclick="login()" class="btn btn-dark text-info mt-3 mb-4 ">Login In</button>
  
    </form>

</div>
