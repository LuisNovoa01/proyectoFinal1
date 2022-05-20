<?php ob_start() ?>
<?php MensajesFlash::imprimir_mensajes(); ?>
<button type="button" class="btn btn-primary btn-table" style="font-color:white" data-bs> <a class="dropdown-item"
        href="<?=RUTA?>insert_department">Insertar Departamentos</a></button>


<div class="table" id="mydatatable-container">
    <table class="records_list table table-striped table-bordered table-hover" id="mydatatable">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Telefono</th>
                <th scope="col">Email</th>
                <th scope="col">Icono</th>
                <th scope="col">Hab/Deshab</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($departments as $d): ?>
            <tr>
                <th scope="row" id="departmentInfo"><?= $d->getIdDepartment() ?></th>
                <th id="departmentInfo"><?= $d->getName() ?></th>
                <th id="departmentInfo"><?= $d->getDescription() ?></th>
                <th id="departmentInfo"><?= $d->getPhone() ?></th>
                <th id="departmentInfo"><?= $d->getEmailDepartment() ?></th>
                <th id="departmentInfo"><?= $d->getIconDepartment() ?></th>
                <?php if ($d->getDisable()==0): ?>
                <td id="departmentInfo">Habilitado</td>
                <?php else: ?>
                <td id="departmentInfo">DESHabilitado</td>
                <?php endif; ?>
                <th>
                    <!-- buttons bootstrap to edit the Department with call to modalEditDepartment windowsDialog Modal to edit Department with id="id="modalEditDepartment" -->
                    <button type="button" class="btn btn-primary btn-table" id="<?= $d->getIdDepartment() ?>"
                        data-id=<?= $d->getIdDepartment() ?> data-bs-toggle="modal"
                        data-bs-target="#editDepartmentModal">Editar <?= $d->getIdDepartment() ?></button>
                                <!-- button to open windows view_item, no modal -->
                                <a href="edit_department/<?= $d->getIdDepartment() ?>">
                            <button type="button" class="btn btn-primary btn-table m-0 p-1">Ver en ventana Nueva</button>
                        </a>
                </th>
            </tr>
            <?php endforeach; ?>
            <!-- include modal windows to edit or delete Department -->
        </tbody>
    </table>
</div>

<?php
 $contenido = ob_get_clean();
 $titulo = "Web Registro Trabajos Ayto. Argamasilla de Alba";
 $titulo2 = "Detalle de Departamentos";
 require '../app/views/template.php';
 ?>

<script src="app/scripts/departments.js"></script>

<!-- Modal to edit Department -->
<div class="modal fade" id="editDepartmentModal" aria-labelledby="editDepartmentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editDepartmentModalLabel">Editar Departamento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?=RUTA."/edit_department"?>" id="edit-form">
                    <div class="form-group">
                        <label for="idDepartment">ID</label>
                        <input type="text" class="form-control" id="id" name="id">
                    </div>
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="description">Descripcion</label>
                        <input type="text" class="form-control" id="description" name="description">
                    </div>
                    <div class="form-group">
                        <label for="phone">Telefono</label>
                        <input type="phone" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="emailDepartment">Email</label>
                        <input type="emailDepartment" class="form-control" id="emailDepartment" name="emailDepartment">
                    </div>
                    <div class="form-group">
                        <label for="iconDepartment">Icono</label>
                        <input type="text" class="form-control" id="iconDepartment" name="iconDepartment">
                    </div>
                    <div class="form-group">
                        <label for="disable">DesHabilitado</label>
                        <input class="form-check-input" type="checkbox" id="disable" name="disable">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btnUpdateSubmit">Editar Departamento</button>
            </div>
        </div>
    </div>
</div>