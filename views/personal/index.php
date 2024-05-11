<?php require ('views/header.php'); ?>

<div class="grid-container">
  <div class="grid-x margin-3">
    <div class="cell callout shadow margin-top-3">
      <h1 class="">Registro de Personal<br> <?php echo $this->mensaje; ?></h1>
      <h2>Ministerio de Transportes y Comunicaciones</h2>
      <form action="<?php echo constant('URL'); ?>personal/create" method="POST">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" />
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido"/>
        <label for="sexo">Sexo</label>
        <select name="sexo" id="sexo">
          <option value="masculino">masculino</option>
          <option value="femenino">femenino</option>
        </select>
        <label for="fnacimiento" id="fnacimiento">fecha Nacimiento</label>
        <input type="date" name="fnacimiento" id="fnacimiento" /> 
        <input type="submit" value="Ingresar" class="button success" />
      </form>
    </div>
  </div>
</div>
<?php require ('views/footer.php'); ?>