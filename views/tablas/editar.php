<?php require ('views/header.php'); ?>
<div class="grid-container">
    <div class="grid-x margin-3">
        <div class="cell callout shadow margin-top-3">
            <h2>Editar usuarios</h2>
            <h3>Ministerio de Transportes y Comunicaciones</h3>
            <form action="<?php echo constant('URL'); ?>tablas/updateLogin" method="POST">
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" id="usuario" value="<?php echo $this->data['usuario']; ?>" />
                <label for="pass">Contraseña</label>
                <input type="password" name="pass" id="pass" value="<?php echo $this->data['passwd']; ?>" disabled/>
                <label for="password">Nueva Contraseña</label>
                <input type="password" name="password" id="password"/>
                <label for="nivel" id="nivel">Nivel</label>
                <select name="nivel" id="nivel">
                    <option value="admin" <?php echo isset($this->data['nivusu']) && $this->data['nivusu'] == 1 ? 'selected' : '' ?>>Administrador</option>
                    <option value="personal" <?php echo isset($this->data['nivusu']) && $this->data['nivusu'] == 0 ? 'selected' : '' ?>>Personal</option>
                    <option value="viewer" <?php echo isset($this->data['nivusu']) && $this->data['nivusu'] == 2 ? 'selected' : '' ?>>Visitante</option>
                </select>
                <label for="nivel" id="nivel">Estado</label>
                <select name="estado" id="nivel">
                    <option value="activo" <?php echo isset($this->data['chkusu']) && $this->data['chkusu'] == 1 ? 'selected' : '' ?>>Activo</option>
                    <option value="inactivo" <?php echo isset($this->data['chkusu']) && $this->data['chkusu'] == 0 ? 'selected' : '' ?>>Inactivo</option>
                </select>
                <input type="text" name="idlogin" value="<?php echo $this->data['idlogin']; ?>" hidden style="display:none;">
                <input type="submit" value="Ingresar" class="button success" />
            </form>
        </div>
    </div>
    <script src="<?php echo constant('URL'); ?>public/js/registro.js"></script>

</div>
<?php require ('views/footer.php'); ?>