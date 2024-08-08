<?php require ('views/header.php'); ?>
<link rel="stylesheet" href="<?php echo constant('URL') ?>public/Assets/css/jpaginate.css">
<div class="grid-container full margin-1">
    <div class="grid-x">
        <div class="cell text-center">
            <h1>Registros de Usuarios</h1>
        </div>
        <div class="cell">
            <h2>Usuarios para iniciar sesion</h2>
            <table>
                <thead>
                    <tr>
                        <th>Personal</th>
                        <th>usuario</th>
                        <th>password</th>
                        <th>nivel</th>
                        <th>estado</th>
                        <th>fecha creacion</th>
                        <th colspan="2">acciones</th>
                    </tr>
                </thead>
                <tbody id="login">
                    <tr>
                        <td><a href="" class="button"></a></td>
                    </tr>
                </tbody>
            </table>
            <div id="usuarios-paginacion"></div>
        </div>
        <div class="cell">
            <h2>Personal Registrado</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Sexo</th>
                        <th>Fecha</th>
                        <th>fecha creacion</th>
                    </tr>
                </thead>
                <tbody id="personal">
                    <tr>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <div id="personal-paginacion"></div>
        </div>
    </div>
    <script src="<?php echo constant('URL'); ?>public/js/tablas.js"></script>
</div>
<?php require ('views/footer.php'); ?>