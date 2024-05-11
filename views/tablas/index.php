<?php require ('views/header.php'); ?>
<div class="grid-container">
    <div class="grid-x">
        <div class="cell">
            <h1>Tablas</h1>
        </div>
        <div class="cell">
            <h2>Logins</h2>
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
        </div>
        <div class="cell">
            <h2>Personal</h2>
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
        </div>
    </div>
    <script src="<?php echo constant('URL'); ?>public/js/tablas.js"></script>
</div>
<?php require ('views/footer.php'); ?>