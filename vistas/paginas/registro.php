<div class="d-flex justify-content-center">
  <form method="post">

    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" class="form-control" id="nombre" name="registroNombre">
    </div>
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" class="form-control" id="email" name="registroEmail">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" name="registroPassword">
    </div>

    <?php 
/*$registro = new ControladorFormularios();
$registro -> ctrRegistro();*/
$registro = ControladorFormularios::ctrRegistro();
if ($registro == "ok") {

  echo '<script>

  if(window.history.replaceState){
    window.history.replaceState(null,null,window.location.href);
  }
  </script>';

  echo '<div class="alert alert-success">
  El usuario a sido registrado
  </div>';
}

?>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>