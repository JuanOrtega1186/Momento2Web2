
<div class="container mt-5 mb-4 col-lg-5 justify-content:center border radius rounded" >
       
  <form action="<?php echo base_url();?>/public/registro" method="POST" class="row g-3 bg-light text-grey rounded" id="form">
  <p class="h1 text-center bg-dark text-info p-2 rounded">Registrarse</p>
    <div class="col-md-6 ">
      <label for="validationServer01" class="form-label">Nombres</label>
      <input type="text" class="form-control" id="nombre" placeholder="Su(s) nombre(s)" name="nombre"  required>
      <div class="valid-feedback">
  
      </div>
    </div>
    <div class="col-md-6">
      <label for="validationServer02" class="form-label">Apellidos</label>
      <input type="text" class="form-control" id="apellido" placeholder="Su(s) apellido(s)" name="apellido" required>
      <div class="valid-feedback">
      </div>
    </div>
    
    <div class="col-md-6">
      <label for="validationServer03" class="form-label">Ciudad</label>
      <select class="form-select" id="ciudad" aria-describedby="validationServer04Feedback" name="ciudad" required>
      <option selected  value="Medellin">Medellin</option>
          <option  value="Santa Marta">Santa Marta</option>
          <option  value="Bogota">Bogota</option>
          <option  value="Cartagena">Cartagena</option>
          <option  value="Cali">Cali</option>
        
      </select>
    </div>
    <div class="col-md-6">
      <label for="validationServer04" class="form-label">Pais</label>
          <input type="text" class="form-control" id="pais" placeholder="Colombia" name="pais" required>
      <div id="validationServer04Feedback" class="invalid-feedback">
      </div>
    </div>
  <div class="col-md-6">
      <label for="validationServerUsername" class="form-label glyphicon glyphicon-envelope">Correo Electronico <span class="glyphicon glyphicon-envelope"></span></label>
      <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend3" >@</span>
         <input type="email" class="form-control" id="email" name="correo" 
        aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback"  placeholder="consulta@gmail.com" >
        <div id="validationServerUsernameFeedback" class="invalid-feedback">
        </div>
      </div>
    </div>


  <div class="col-md-6">
          <label for="validationServer05"  class="form-label">Contraseña</label>
             <input type="password" class="form-control" id="password" aria-describedby="validationServer05Feedback" name="clave">
      <div id="validationServer05Feedback" class="invalid-feedback">
          <span id="ValidacionPassword"></span>
      </div>
  </div>
  <label id="ValidacionPassword" style="color: red;"></label>
    <div class="col-md-6">
          <label for="validationServer04" class="form-label">Rol</label>
          <select class="form-select" id="rol" aria-describedby="validationServer04Feedback" name="rol" >
              <option selected  value="">Seleccione:</option>
              <option  value="Anfitrion">Anfitrion</option>
              <option  value="Invitado">Invitado</option>
          </select>
             </div>
       <div class="col-12">
          <label for="" class="form-label">Descripcion</label>
          <textarea class="form-control" id="descrip" name="descripcion" rows="3" placeholder="Breve descripcion personal:"></textarea>
      </div>
            <div class="form-group  text-center">
                <h5><span  class="label label-info text-info bg-dark tex-center " id="error"></span></h5>
           </div>
          <button  class="btn btn-dark text-info btn-lg btn-block mb-4" type="submit" name="btRegistrar">Enviar</button>
     
      </form>
</div>

