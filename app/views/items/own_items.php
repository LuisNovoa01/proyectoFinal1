<?php
ob_start();
?>
<?php MensajesFlash::imprimir_mensajes(); ?>


<div class="col-sm-12">
<a href="<?= RUTA?>insert_itemUsers">
                <button type="button" class="btn btn-primary btn-table" onclick="printDiv('printableArea')">
                    <i class="fa-solid fa-file-circle-plus"></i> Insertar Item
                </button>
            </a>
    <div class="table-responsive" id="mydatatable-container">
        <table class="records_list table table-striped table-bordered table-hover" id="mydatatable">
            <thead>
                <tr>
                <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Departamento</th>
                    <th scope="col">Servicio</th>
                    <th scope="col">Atendió:</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Duracion</th>
                    <th scope="col">Result</th>
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
                    <th>Filter..</th>
                    <th>Filter..</th>
                    <th>Filter..</th>
                    <th hidden>Filter..</th>
                </tr>
            </tfoot>
            <tbody>
                <?php foreach ($mis_items as $i): ?>
                <tr>
                <td id="itemInfo"><a href="ver_item/<?= $i->getId() ?>"><?= $i->getName() ?></a></td>
                    <td id="descriptionInfo"><?= substr($i->getDescription(),0,20) ."..."?></td>
                    <td id="departmentInfo"><?= $i->getItemDepartment()->getIdDepartment() ," - ", $i->getItemDepartment()->getName() ?></td>
                    <td id="id_serviceInfo"><?= $i->getId_service() ?></td>
                    <td id="attendUserInfo"><?= $i->getId_attendUser() ," - ",$i->getUser_attendUser()->getNombre()," ", substr($i->getUser_attendUser()->getSurname(),0,8); ?></td>
                   
                    <?php if ($i->getId_clientUser()==0 || $i->getId_clientUser()==null): ?>
                    <td id="clientUserInfo" style="color:red">0000 - No asignado</td>
                    <?php else: ?>
                    <td id="clientUserInfo">
                        <?= $i->getId_clientUser() ," - ",$i->getUser_clientUser()->getNombre()," ", $i->getUser_clientUser()->getSurname()?>
                    </td>
                    <?php endif; ?>

                    <td id="stateInfo"><?= $i->getState() ?></td>
                    <td id="dateInfo"><?= $i->getDate() ?></td>
                    <td id="hourInfo"><?= substr($i->getHour(),0,5) ?></td>
                    <td id="durationInfo"><?= substr($i->getDuration(),0,5) ?></td>
                    <td id="resultInfo"><?= $i->getResult() ?></td>                
                    <th>
                        <!--buttons bootstrap to edit the user with call to modalEditUser windowsDialog Modal to edit user with id="id="modalEditUser" -->
                        <button type="button" class="btn btn-primary m-0 p-1" data-bs-toggle="modal"
                            data-bs-target="#editItemModal" data-id="<?= $i->getId()?>"
                            id="boton_editar">Editar</button>
                        <button hidden type="button" class="btn btn-danger m-0 p-1" data-toggle="modal"
                            data-target="#deleteItemModal" data-id="<?= $i->getId()?>">Eliminar </button>
                    </th>
                   
                </tr>
                <?php endforeach; ?>
                <!-- include modal windows to edit or delete user -->
            </tbody>
        </table>
    </div>
</div>

<?php
 $contenido = ob_get_clean();
 /*$titulo = "Web Registro Trabajos Ayto. Argamasilla de Alba";*/
 $titulo2 = "Detalle de Items";
 require '../app/views/template.php';
 ?>

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

<script src="app/scripts/items.js"></script>

<script type="text/javascript">
$(document).on('click', '#boton_editar', function() {
    let id = $(this).attr('data-id');
    //Send information by ajax 
    $.ajax({
        url: 'pb',
        type: 'POST',
        data: {
            id
        },
        //Recuperamos la información 
        success: function(e) {
            //console.log(e);
            let traer = JSON.parse(e);
            //Imprimimos la información en la ventana modal 
            traer.forEach((valor) => {
                $("#id").val(valor.id);
                $("#name").val(valor.name);
                $("#description").val(valor.description);
                $("#location").val(valor.location);
                $("#id_department").val(valor.id_department);
                $("#id_service").val(valor.id_service);
                $("#id_attendUser").val(valor.id_attendUser);
                $("#id_clientUser").val(valor.id_clientUser);
                $("#state").val(valor.state);
                $("#date").val(valor.date);
                $("#hour").val(valor.hour);
                $("#duration").val(valor.duration);
                $("#result").val(valor.result);
            });
        }
    });
});
</script>

<!-- Modal to edit Item -->
<div class="modal fade" id="editItemModal" aria-labelledby="editItemModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editItemModalLabel">Editar Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex">
                <form id="editItemForm" class="modal-body d-flex flex-wrap" action="<?= RUTA."edit_item"?>"
                    enctype="multipart/form-data">
                    <div class="form-group col-3">
                        <label for="id">ID</label>
                        <input type="text" class="form-control" id="id" name="id" placeholder="Id" value=""
                            style="margin-bottom:1em" required readonly>
                    </div>
                    <div class="form-group col-9">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value=""
                            style="margin-bottom:1em" required>
                    </div>
                    <div class="form-group col-12">
                        <label for="description">Descripción</label>
                        <textarea type="textarea" class="form-control" id="description" name="description"
                            placeholder="Descripción" value="" style="margin-bottom:1em" required>
                        </textarea>
                    </div>
                    <div class="form-group col-12" hidden>
                        <label for="location">Ubicación</label>
                        <input type="text" class="form-control" id="location" name="location" placeholder="Ubicación"
                            value="" style="margin-bottom:1em" required>
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="id_department">Departamento</label>
                        <select class="form-control" id="id_department" name="id_department" style="margin-bottom:1em" required>
                            <option value="">Seleccione....</option>
                            <?php foreach ($departments as $department): ?>
                            <option value="<?php echo $department->idDepartment ?>">
                                <?php echo $department->idDepartment, " - " ; echo $department->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="id_service">Servicio</label>
                        <input type="text" class="form-control" id="id_service" name="id_service" style="margin-bottom:1em" required>
                    </div>
                    <div class="form-group" hidden>
                        <label for="id_attendUser">Atendió:</label>
                        <input type="text" class="form-control" id="id_attendUser" name="id_attendUser" style="margin-bottom:1em" required>
                    </div>
                    <label for="id_clientUser" class="form-label">Cliente: (por precaución no se muestra el dni
                        entero, puedes buscar a partir de la 5ª cifra del DNI o NIE)</label>
                    <?php if ($usuario->getRol() == 'admin' || $usuario->getRol() =='superAdmin') { ?>
                    <select class="form-control" name="id_clientUser" id="id_clientUser" style="margin-bottom:1em">
                        <option value="">Seleccione....</option>
                        <?php foreach ($clients as $client): ?>
                        <option value="<?php echo $client->id  ?>">
                            <?php echo substr($client->dni,4,9), " - " ; echo $client->nombre , " " ;  echo $client->surname; ?>
                        </option>
                        <?php endforeach; ?>
                        <?php } ?>
                        <?php if ($usuario->getRol() == '' || $usuario->getRol() =='user') { ?>
                        <input class="form-control" name="inputUser"
                            value="<?php echo Session::obtener()->getId() ?><?php echo " ", Session::obtener()->getNombre() ?>"
                            readonly>
                        <?php } ?>
                    </select>
                    <div class="form-group col-6 col-md-4">
                        <label for="date">Fecha</label>
                        <input type="date" class="form-control" id="date" name="date" style="margin-bottom:1em" required>
                    </div>
                    <div class="form-group col-6 col-md-4">
                        <label for="hour">Hora</label>
                        <input type="time" class="form-control" id="hour" name="hour" style="margin-bottom:1em" required>
                    </div>
                    <div class="form-group col-6 col-md-4">
                        <label for="duration">Duración</label>
                        <input type="time" class="form-control" id="duration" name="duration" style="margin-bottom:1em" required>
                    </div>
                    <div class="form-group col-6 col-md-4">
                        <label for="state">Estado</label>
                        <select id="state" name="state" class="form-select" >
                            <option selected>Registrada</option>
                            <option>Iniciada</option>
                            <option>En Proceso</option>
                            <option>Finalizada</option>
                        </select>
                    </div>
                    <div class="form-group col-6 col-md-4">
                        <label for="result">Result</label>
                        <select id="result" name="result" class="form-select" >
                            <option selected>NO</option>
                            <option value="Anulada">Anulada</option>
                            <option value="No asiste">NO asiste</option>
                            <option value="Asistio">Asistió</option>
                            <option value="No responde">No responde</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btnUpdateSubmit">Editar Item</button>
            </div>
        </div>
    </div>
</div>