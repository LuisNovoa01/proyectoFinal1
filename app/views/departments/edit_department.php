<?php ob_start() ?>
<link href="<?= RUTA?>web/js/jQuery-TE_v.1.4.0/jquery-te-1.4.0.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?= RUTA?>web/js/jQuery-TE_v.1.4.0/jquery-te-1.4.0.min.js"></script>
<script src="<?= RUTA?>node_modules/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?= RUTA?>node_modules/sweetalert/dist/sweetalert2.all.min.js"></script>
<script src="<?= RUTA?>node_modules/sweetalert/package.json"></script>
<script src="<?= RUTA?>node_modules/sweetalert/dist/local.js"></script>
   <script src="https://use.fontawesome.com/2a534a9a61.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css"
        integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous" />


<script type="text/javascript">
    $(function() {
        $("#descripcion").jqte();
    });
</script>
<!-- Recoge informacións -->
<div class="row col-12 align-center justify-content-center">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">
                <h3>Editar Departamento</h3>
               
            </div>
            <div class="card-body">
                    <!-- <form class="row g-3 col-md-12" id="departament" action="" method="post" enctype="multipart/form-data"> -->
                       <div class="row">   
                        <input type="hidden" id="id" name="id" value="<?php echo $traedatosDepartamento[0]->idDepartment  ?>">
                        <input type="hidden" id="url" value="<?php echo RUTA."updateDepartament"?>" name="">
                        <?php foreach ($traedatosDepartamento as $datos): ?>

                            <div class="col-md-6">
                                <label for="inputName" class="form-label">Nombre</label>
                                <input type="text" name="inputName" id="inputName" class="form-control" placeholder="Titulo del Item" value="<?php echo $datos->name ?>">
                            </div>

                            <div class="col-md-6">
                                <label for="inputDescription" class="form-label">Descripcion</label>
                                <textarea  type="textarea" class="form-control" name="inputDescription" id="inputDescription"
                                placeholder="Descripción..." ><?php echo $datos->description?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPhone" class="form-label">Telefono</label>
                                <input type="text" name="inputPhone" id="inputPhone" class="form-control" placeholder="Telefono" value="<?php echo $datos->phone ?>">
                            </div>

                            <div class="col-md-6">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email" value="<?php echo $datos->emailDepartment ?>">
                            </div>

                            <div class="col-md-6">
                                <label for="inputIcon" class="form-label">Icono departamento</label>
                                <input type="text" name="inputIcon" id="inputIcon" class="form-control" value='<?php echo $datos->iconDepartment?>' placeholder="">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Icono</label><br>
                                <?php echo $datos->iconDepartment ?>
                            </div>

                            <div class="col-md-6">
                                <label for="disable" class="form-label">DesHabilitado</label>
                                <select class="form-control" name="disableDepartment" id="disableDepartment">    
                                    <?php if ($datos->disableDepartment == 1){$muestra = 'Deshabilitado';}else{$muestra = 'Habilitado';} ?>
                                    <option value="<?php echo $datos->disableDepartment ?>"><?php echo $muestra ; ?></option>
                                    <option value="0">Habilitado</option>
                                    <option value="1">Deshabilitado</option>
                                </select>
                            </div>    
                        <?php endforeach ?>
                     
                        <div style="text-align: center;">
                            <br>
                            <button id="btnUpdateSubmit" class="btn btn-primary">Editar Departamento</button>
                        </div>
                 </div>    
            </div>
        </div> 
    </div>               
</div>
<!-- </form> -->
<script src="<?= RUTA?>app/scripts/departments.js"></script>
<?php
$contenido = ob_get_clean();
$titulo = "Web Registro Trabajos Ayto. Argamasilla de Alba";
$titulo2 = "Insertar Departamentos";
require '../app/views/template.php';
?>