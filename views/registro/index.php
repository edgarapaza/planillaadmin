<?php require ('views/header.php'); ?>
<div class="grid-container">
  <div class="grid-x margin-3">
    <div class="cell callout shadow margin-top-3">
      <h2>Registro de usuarios <br> <?php echo $this->mensaje; ?></h2>
      <h3>Ministerio de Transportes y Comunicaciones</h3>
      <form action="<?php echo constant('URL'); ?>registro/create" method="POST">
          <label for="personal">Personal</label>
          <select name="personal" id="personal">
            <option value="1">1</option>
          </select>
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario" />
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" />
        <label for="password2">Repetir Contraseña</label>
        <input type="password" name="password2" id="password2" />
        <label for="nivel" id="nivel">Nivel</label>
        <select name="nivel" id="nivel">
          <option value="personal">Personal</option>
          <option value="admin">Administrador</option>
        </select>
        <input type="submit" value="Ingresar" class="button success" />
      </form>
    </div>
  </div>
<script src="<?php echo constant('URL'); ?>public/js/registro.js"></script>

</div>
<?php require ('views/footer.php'); ?>