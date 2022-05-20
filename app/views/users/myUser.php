<?php ob_start() ?>
<link href="<?= RUTA?>web/js/jQuery-TE_v.1.4.0/jquery-te-1.4.0.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?= RUTA?>web/js/jQuery-TE_v.1.4.0/jquery-te-1.4.0.min.js"></script>


<div class="d-flex align-items-center justify-content-center bg-br-primary ">
    <div class="row col-12">

        <form class="form-floating" action="" method="post" enctype="multipart/form-data">

            <div class="row" style="paddin:10px; margin:10px">
                <h3 class="text-center">Mis Datos de Usuario</h3>
                <!-- USER PHOTO -->
                <input type="hidden" name="token" value="<?= $token ?>">
                <section class="col-12">
                    <?php if (Session::existe()): ?>
                    <div id="userInfo">
                        <div id="photo_usuario"
                            style="background-image: url(<?= RUTA?>web/images/users/<?= Session::obtener()->getPhoto() ?>)">
                        </div>
                        <form id="formulario_actualizar_photo" action="subir_photo" method="post"
                            enctype="multipart/form-data">
                            <input type="file" name="photo" id="input_photo">
                            <input type="submit">
                        </form>
                        <div id="userInfo"><?= $user->getNombre() ?>
                            <?= $user->getSurname() ?>
                            <br>
                            <a href="logout">cerrar sesión</a>
                        </div>
                    </div>
                    <?php else: ?>
                    <?php endif; ?>
                </section>
                <div class="col-md-6 col-12 m-10" style="padding-bottom: 20px">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="name" value=<?= $user->getNombre() ?> class="form-control"
                        aria-describedby="nameHelp">
                </div>
                <div class="col-md-6 col-12" style="padding-bottom:20px">
                    <label class="form-label">Apellidos</label>
                  <!-- Input for surname what show $user->getSurname() completely, including spaces  -->
                    <input type="text" name="surname" value=<?= substr($user->getSurname(),0,100) ?> class="form-control"
                        aria-describedby="surnameHelp">
                </div>
                <div class="col-md-4 col-6" style="padding-bottom:20px">
                    <label class="form-label">DNI o NIE completo</label>
                    <input type="dni" name="dni" value=<?= $user->getDni() ?> class="form-control"
                        aria-describedby="dniHelp">
                </div>
                <div class="col-md-4 col-6" style="padding-bottom:20px">
                    <label class="form-label">Genero</label>
                    <input type="text" name="gender" value=<?= $user->getGender() ?> class="form-control"
                        aria-describedby="genderHelp">
                </div>
                <div class="col-md-4 col-6" style="padding-bottom:20px">
                    <label class="form-label">BirthDate</label>
                    <input type="date" name="birth_date" value=<?= $user->getBirth_date() ?> class="form-control"
                        aria-describedby="birth_dateHelp">
                </div>
                <div class="col-md-4 col-6" style="padding-bottom:20px">
                    <label class="form-label">Teléfono</label>
                    <input type="number" name="phone" value=<?= $user->getPhone() ?> class="form-control" max=999999999>
                </div>
                <div class="col-md-6 col-12" style="padding-bottom:20px">
                    <label class="form-label">Email/Direccion de correo electrónico</label>
                    <input type="email" name="email" value=<?= $user->getEmail() ?> class="form-control"
                        aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Nunca compartas tu email con nadie</div>
                </div>

                <div class="col-md-6 col-12" style="padding-bottom:20px">
                    <label class="form-label">Código Postal</label>
                    <select class="form-control" id="postalCode" name="postalCode" required>
                        <option value=<?= $user->getPostalCode() ?>>Seleccione Código Postal</option>
                        <?php foreach ($list_postalCodes as $postalCode): ?>
                        <option value="<?php echo $postalCode->code  ?>">
                            <?php echo $postalCode->code, " - " ; echo $postalCode->town; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-6 col-12" style="padding-bottom:20px">
                    <label class="form-label">Dirección</label>
                    <input type="text" name="address" value=<?= $user->getAddress() ?> class="form-control"
                        aria-describedby="addressHelp">
                </div>
                <div class="col-md-6 col-12" style="padding-bottom:20px">
                    <label class="form-label">Password</label>
                    <input class="form-control" type="password" name="password" value=<?= $user->getPassword() ?>>
                    <div id="passwordHelp" class="form-text">Pon una Contraseña Segura: Con al menos 8 caracteres,
                        Mayusculas y minusculas</div>
                </div>
                <div class="col-md-6 col-12" style="padding-bottom:20px">
                    <label class="form-label">Vuelve a escribir la Password para comprobación</label>
                    <input type="password" name="password2" id="password2" class="form-control"
                        placeholder="Introduce aqui tu password">
                    <div id="passwordHelp" class="form-text">Escribe la misma contraseña que en la casilla anterior
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto del Usuario</label>
                    <input type="file" name="photo" class="form-control" accept="image/*" aria-describedby="photoHelp">
                    <div id="photoHelp" class="form-text">Añade aqui tu foto</div>
                </div>
                <?php if (Session::existe()) { ?>
                <?php
                            $conn = ConexionBD::conectar();
                            $usuDAO = new UsuarioDAO($conn);
                            $usuario = $usuDAO->findUserById(Session::obtener()->getId());
                        ?>
                <?php if ($usuario->getRol() == 'admin' || $usuario->getRol() == 'superAdmin') { ?>
                <div class="mb-3">
                    <label class="form-label">Rol</label>
                    <select name="rol" class="form-control">
                        <option value="user">Usuario</option>
                        <?php if ($user->getRol() =='superAdmin') { ?>
                        <option value="admin">Administrador</option>
                        <option value="superAdmin">Super Administrador</option>
                    </select>
                </div>
                </li>
                <?php } ?>
                <?php } ?>
                <?php } ?>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="datesConsent" name="datesConsent"
                        checked>
                    <label class="form-check-label" for="flexCheckChecked">Doy mi Consentimiento según Ley de
                        Protección de Datos
                    </label>
                </div>
                <div style="justify-content:center; align-items:center">
                    <button type="submit" value="edit_user" class="btn btn-primary w-75">Cambiar mis datos de
                        Usuario</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
$contenido = ob_get_clean();
/*$titulo = "Web Registro Trabajos Ayto. Argamasilla de Alba";*/
$titulo2 = "Mis Datos de usuario";
require '../app/views/template.php';
?>
<script>
window.onload = function() {
    var myInput = document.getElementById('password2');
    myInput.onpaste = function(e) {
        e.preventDefault();
        alert("no se puede pegar en esta casilla");
    }

    myInput.oncopy = function(e) {
        e.preventDefault();
        alert("no se puede copiar de esta casilla");
    }
}
</script>

<!-- script to control when the user change the cell email, check the email is correct or not -->
<script>
$(document).ready(function() {
    $("#email").change(function() {
        var email = $("#email").val();
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (regex.test(email)) {
            $("#emailHelp").html("");
        } else {
            $("#emailHelp").html("El email no es correcto");
        }
    });
});
</script>

<!-- script to control when the user change the cell phone, check the phone is correct or not -->
<script>
$(document).ready(function() {
    $("#phone").change(function() {
        var phone = $("#phone").val();
        var regex = /^[0-9]{9}$/;
        if (regex.test(phone)) {
            $("#phoneHelp").html("");
        } else {
            $("#phoneHelp").html("El telefono no es correcto");
        }
    });
});
</script>

<!-- script to control when the user change the cell dni or nie, check the dni or nie is correct or not -->
<script>
$(document).ready(function() {
    $("#dni").change(function() {
        var dni = $("#dni").val();
        var regex = /^[0-9]{8}[A-Z]$/;
        if (regex.test(dni)) {
            $("#dniHelp").html("");
        } else {
            $("#dniHelp").html("El DNI no es correcto");
        }
    });
});
</script>

<!-- scripts to change Userphoto-->
<script type="text/javascript">
$('#photo_usuario').click(function() {
    $('#input_photo').click();
});

$('#input_photo').change(function() {
    $('#formulario_actualizar_photo').submit();
})
</script>