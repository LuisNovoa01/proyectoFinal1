<?php
ob_start();
?>
<?php MensajesFlash::imprimir_mensajes(); ?>

<button type="button" class="btn btn-primary btn-table" style="margin:10px; color:white" data-bs> <a class="dropdown-item"
        href="<?=RUTA?>add_user">Insertar Usuarios</a></button>

<div class="table-responsive" id="mydatatable-container">
    <table class="records_list table table-striped table-bordered table-hover" id="mydatatable">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Fecha Nacimiento</th>
                <th scope="col">Email</th>
                <th scope="col">Telefono</th>
                <th scope="col">Dirección</th>
                <th scope="col">DNI</th>
                <th scope="col">Rol</th>
                <th scope="col">Foto</th>
                <th scope="col">Options</th>
            </tr>
        </thead>
        <tfoot style="display: table-header-group !important">
            <tr>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th>Filter..</th>
                <th hidden>Filter..</th>
                <th hidden>Filter..</th>
            </tr>
        </tfoot>
        <tbody>
            <?php foreach ($usersList as $u): ?>
            <tr>
                <th id="userInfo"><?= $u->getNombre() ?></th>
                <th id="userInfo"><?= $u->getSurname() ?></th>
                <th id="userInfo"><?= substr($u->getBirth_date(),0,7)."-xx" ?></th>
                <th id="userInfo"><?= substr($u->getEmail(),4,9 )?></th>
                <th id="userInfo"><?= "----".substr($u->getPhone(),5,9) ?></th>
                <th id="userInfo"><?= $u->getPostalCode() ." - ". $u->getAddress() ?></th>
                <th id="userInfo"><?= "----".substr($u->getDni(),4,9) ?></th>
                <th id="userInfo"><?= $u->getRol() ." - ". $u->getDepartment() ?></th>
                <th> <?php if ($u->getPhoto() != null): ?>
                    <!-- we check the photo exists in the gallery -->
                    <img id="photo_usuario"
                        style="background-image: url(<?= RUTA?>web/images/users/<?= $u->getPhoto() ?>)"
                        class="img-thumbnail" alt="" width="100" height="100">
                    <?php else: ?>
                    <img style="background-image: url(<?= RUTA?>web/images/users/user_generico.png)"
                        class="img-thumbnail" alt="" width="100" height="100">
                    <?php endif; ?>
                </th>
                <th>
                    <!--buttons bootstrap to edit the user with call to editUserModal windowsDialog Modal to edit user with id="id="modalEditUser" -->
                    <button type="button" class="btn btn-primary btn-table" id="<?= $u->getId() ?>" data-id=<?= $u->getId() ?>
                        data-bs-toggle="modal" data-bs-target="#editUserModal">Editar <?= $u->getId() ?></button>
                    <button class="btn btn-danger btn-table" onclick="deleteUser(<?= $u->getId() ?>)"
                        id="deleteUser">Eliminar<?= $u->getId() ?><img src="<?= RUTA?>web/images/icons/trash.svg"
                            class="papelera hidden"></button>
                </th>
            </tr>
            <?php endforeach; ?>
            <!-- include modal windows to edit or delete user -->
        </tbody>
    </table>
    <div>


        <?php
 $contenido = ob_get_clean();
/* $titulo = "Web Registro Trabajos Ayto. Argamasilla de Alba";*/
 $titulo2 = "Detalle de Usuarios";
 require '../app/views/template.php';
 ?>

         <!-- Modal to edit user -->
         <div class="modal fade" id="editUserModal" aria-labelledby="editUserModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content d-flex">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editUserModalLabel">Editar Usuario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex">
                        <form action="<?=RUTA."/edit_user"?>" class="modal-body d-flex flex-wrap" id="edit-form">
                            <input type="text" class="form-control" id="id" name="id" hidden>
                            <div class="form-group col-md-4 col-12">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                    style="margin-bottom:1em">
                            </div>
                            <div class="form-group col-md-8 col-12">
                                <label for="apellidos">Apellidos</label>
                                <input type="text" class="form-control" id="apellidos" name="apellidos"
                                    style="margin-bottom:1em">
                            </div>
                            <div class="col-md-4 col-12">
                                <label class="form-label">DNI o NIE completo</label>
                                <input type="dni" name="dni" placeholder="Introduce aqui el DNI o NIF"
                                    class="form-control" aria-describedby="dniHelp" style="margin-bottom:1em">
                            </div>
                            <div class="col-md-4 col-6">
                                <label for="gender" class="form-label">Genero</label>
                                <select class="form-control" id="gender" name="gender" aria-describedby="genderHelp"
                                    style="margin-bottom:1em" value="">
                                    <option value="">Selecciona el gendero del desplegable</option>
                                    <option value="Mujer">Mujer</option>
                                    <option value="Hombre">Hombre</option>
                                    <option value="NoBinario">No binario</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-6">
                                <label for="birth_date" class="form-label">Fecha de Nacimiento</label>
                                <input type="date" name="birth_date" id="birth_date" class="form-control"
                                    aria-describedby="birthdateHelp" style="margin-bottom:1em">
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    style="margin-bottom:1em">
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="phone">Telefono</label>
                                <input type="phone" class="form-control" id="phone" name="phone"
                                    style="margin-bottom:1em">
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="postalCode">Código Postal</label>
                                <select class="form-control" id="postalCode" name="postalCode" style="margin-bottom:1em"
                                    required>
                                    <option value="">Seleccione Código Postal</option>
                                    <?php foreach ($list_postalCodes as $postalCode): ?>
                                    <option value="<?php echo $postalCode->code  ?>">
                                        <?php echo $postalCode->code, " - " ; echo $postalCode->town; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="address">Direccion Postal</label>
                                <input type="text" name="address"
                                    placeholder="Introduce aqui tu direccion completa con numero, portal, etc..."
                                    class="form-control" aria-describedby="addressHelp" style="margin-bottom:1em">
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="rol">Rol</label>
                                <select class="form-control" id="rol" name="rol" style="margin-bottom:1em">
                                    <option value=""></option>
                                    <option value="superAdmin">Super Administrador</option>
                                    <option value="admin">Administrador</option>
                                    <option value="user">Usuario</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="department">Departamento</label>
                                <select class="form-control" id="department" name="department" required>
                                    <option>Seleccione....</option>
                                    <?php foreach ($departments as $department): ?>
                                    <option value="<?php echo $department->idDepartment  ?>">
                                        <?php echo $department->idDepartment, " - " ; echo $department->name; ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-6 col-12" hidden>
                                <label for="photo">Foto</label>
                                <input type="file" class="form-control" id="photo" name="photo">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="btnUpdateSubmit">Editar Usuario</button>
                    </div>
                </div>
            </div>
        </div>


        <script type="text/javascript">
        $(document).ready(function() {
            $('#mydatatable tfoot th').each(function() {
                var title = $(this).text();
                $(this).html('<input type="text" placeholder="Filtrar.." />');
            });

            var table = $('#mydatatable').DataTable({
                "dom": 'B<"float-left"i><"float-right"f>t<"float-left"l><"float-right"p><"clearfix">',
                "responsive": false,
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
                },
                "order": [
                    [0, "desc"]
                ],
                "initComplete": function() {
                    this.api().columns().every(function() {
                        var that = this;

                        $('input', this.footer()).on('keyup change', function() {
                            if (that.search() !== this.value) {
                                that
                                    .search(this.value)
                                    .draw();
                            }
                        });
                    })
                }
            });
        });
        </script>
        <script src="app/scripts/users.js"></script>