  <div class="wrapper">  
    <form action="<?php echo base_url('index.php/usuarios/acceso')?>" method="post" class='form-signin'>
      <h2 class="form-signin-heading">Por favor Registrese</h2>
      <input type="text" class="form-control" name="cve_usuario" placeholder="Usuario" required="" autofocus="" />
      <input type="password" class="form-control" name="contrasena" placeholder="Contraseña" required=""/>            
      <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>       
    </form>
  </div>