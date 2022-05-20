<?php ob_start() ?>
<link href="<?= RUTA?>web/js/jQuery-TE_v.1.4.0/jquery-te-1.4.0.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?= RUTA?>web/js/jQuery-TE_v.1.4.0/jquery-te-1.4.0.min.js"></script>


<div class="d-flex align-items-center justify-content-center bg-br-primary ">
    <div class="row col-sm-10 col-12">

        <form class="form-floating" action="" method="post" enctype="multipart/form-data">
            <fieldset class="border border-primary" style="border-radius: 35px; background-color:#CCCCCC">
                <div class="row" style="paddin:10px; margin:10px">
                    <legend class="text-center">Formulario de Registro de Usuarios Nuevos</legend>
                    <input type="hidden" name="token" value="<?= $token ?>">
                    <div class="col-md-6 col-12 m-10" style="padding-bottom: 20px">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="name" placeholder="Introduce aqui tu nombre" class="form-control"
                            aria-describedby="nameHelp">
                            <div id="nameHelp" class="form-text"></div>
                    </div>
                    <div class="col-md-6 col-12" style="padding-bottom:20px">
                        <label class="form-label">Apellidos</label>
                        <input type="text" name="surname" placeholder="Introduce aqui tus apellidos"
                            class="form-control" aria-describedby="surnameHelp">
                    </div>
                    <div class="col-md-4 col-12" style="padding-bottom:20px">
                        <label class="form-label">DNI o NIE completo</label>
                        <input type="dni" name="dni" id="dni" placeholder="Introduce aqui el DNI o NIF"
                            class="form-control" aria-describedby="dniHelp">
                        <div id="dniHelp" class="form-text">
                            <small>Ejemplo: 12345678A</small>
                        </div>

                    </div>
                    <div class="col-md-4 col-6" style="padding-bottom:20px">
                        <label class="form-label">Genero</label>
                        <select name="gender" value="Selecciona el Genero" class="form-control"
                            aria-describedby="gender">
                            <option>Selecciona el gendero del desplegable</option>
                            <option value="Mujer">Mujer</option>
                            <option value="Hombre">Hombre</option>
                            <option value="NoBinario">No binario</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                    <div class="col-md-4 col-6" style="padding-bottom:20px">
                        <label class="form-label">Fecha de Nacimiento</label>
                        <input type="date" name="birth_date" placeholder="Introduce aqui tu fecha de nacimiento"
                            class="form-control" aria-describedby="birthdateHelp">
                    </div>
                    <div class="col-md-6 col-12" style="padding-bottom:20px">
                        <label class="form-label">Email/Direccion de correo electrónico</label>
                        <input type="email" name="email" id="email" placeholder="Introduce aqui tu em@il"
                            class="form-control" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Nunca compartas tu email con nadie</div>
                    </div>
                    <div class="col-md-6 col-4" style="padding-bottom:20px">
                        <label class="form-label">Teléfono</label>
                        <input type="number" name="phone" id="phone" placeholder="Introduce aqui tu numero de telefono"
                            class="form-control" max=999999999>
                        <div id="phoneHelp" class="form-text">
                            <small>9 digitos</small>
                        </div>
                    </div>

                    <div class="col-md-6 col-8" style="padding-bottom:20px">
                        <label class="form-label">Código Postal</label>
                        <select class="form-control" id="postalCode" name="postalCode" required>
                            <option value="">Seleccione Código Postal</option>
                            <?php foreach ($list_postalCodes as $postalCode): ?>
                            <option value="<?php echo $postalCode->code  ?>">
                                <?php echo $postalCode->code, " - " ; echo $postalCode->town; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-6 col-12" style="padding-bottom:20px">
                        <label class="form-label">Direccion Postal</label>
                        <input type="text" name="address"
                            placeholder="Introduce aqui tu direccion completa con numero, portal, etc..."
                            class="form-control" aria-describedby="addressHelp">
                    </div>
                    <div class="col-md-6 col-12" style="padding-bottom:20px">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="Introduce aqui tu password">
                        <div id="passwordHelp" class="form-text">Pon una Contraseña Segura: Con al menos 8 caracteres,
                            Mayusculas y minusculas</div>
                    </div>
                    <div class="col-md-6 col-12" style="padding-bottom:20px">
                        <label class="form-label">Vuelve a escribir la Password para comprobación</label>
                        <input type="password" name="password2" id="password2" class="form-control"
                            placeholder="Introduce aqui tu password">
                        <div id="password2Help" class="form-text">Escribe la misma contraseña que en la casilla anterior
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Foto del Usuario</label>
                        <input type="file" name="photo" class="form-control" accept="image/*"
                            aria-describedby="photoHelp">
                        <div id="photoHelp" class="form-text">Añade aqui tu foto</div>
                    </div>
                    <?php if (Session::existe()) { ?>
                    <?php
                            $conn = ConexionBD::conectar();
                            $usuDAO = new UsuarioDAO($conn);
                            $usuario = $usuDAO->findUserById(Session::obtener()->getId());
                        ?>
                    <?php if ($usuario->getRol() == 'admin') { ?>
                    <div class="mb-3">
                        <label class="form-label">Rol</label>
                        <select name="rol" class="form-control">
                            <option value="user">Usuario</option>
                            <?php if ($usuario->getRol() =='superAdmin') { ?>
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
                        <button type="submit" value="registrar" id="registrar" class="btn btn-primary w-75">Registrar Usuario</button>
                    </div>
                </div>
        </form>
    </div>
</div>

<?php
$contenido = ob_get_clean();
/*$titulo = "Web Registro Trabajos Ayto. Argamasilla de Alba";*/
$titulo2 = "Registrar Usuario Nuevo";
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

<!--script to check the password2 is the same that password -->
<script>
$(document).ready(function() {
    $("#password2").change(function() {
        var password = $("#password").val();
        var password2 = $("#password2").val();
        if (password != password2) {
            $("#passwordHelp").html("Las contraseñas no coinciden");
            $("#password2Help").html("Las contraseñas no coinciden");
            $("#passwordHelp").css("color", "red");
            $("#password2Help").css("color", "red");
        } else {
            $("#passwordHelp").html("Las contraseñas coinciden");
            $("#password2Help").html("Las contraseñas coinciden");
            $("#passwordHelp").css("color", "green");
            $("#password2Help").css("color", "green");
        }
    });
});
</script>


<!-- script to control when the user change input email, check the email is correct or not -->
<script>
$(document).ready(function() {
    $("#email").change(function() {
        var email = $("#email").val();
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (regex.test(email)) {
            $("#emailHelp").html("El formato del email parece correcto");
            $("#email").css("border-color", "green");
            $("#emailHelp").css("color", "green");
            /*check if the email exists with findByEmail(email) */
          /*  var conn = ConexionBD::conectar();
            var usuDAO = new UsuarioDAO(conn);
            var usuario = usuDAO.findByEmail(email);
            if (usuario != null) {
                $("#emailHelp").html("El email ya existe");
                $("#email").css("border-color", "red");
                $("#emailHelp").css("color", "red");
            }*/
        } else {
            $("#emailHelp").html("El email introducido no es correcto");
            $("#email").css("border-color", "red");
            $("#emailHelp").css("color", "red");
        }
    });
});
</script>


<!-- script to control when the user change input phone, check the phone have 9 digits and start for 6,7 or 9 to be correct or not -->
<script>
$(document).ready(function() {
    $("#phone").change(function() {
        var phone = $("#phone").val();
        var regex = /^[6789]\d{8}$/;
        if (regex.test(phone)) {
            $("#phoneHelp").html("9 dígitos ok");
            $("#phone").css("border-color", "green");
            $("#phoneHelp").css("color", "green");
        } else {
            $("#phoneHelp").html("El telefono introducido no es correcto");
            $("#phone").css("border-color", "red");
            $("#phoneHelp").css("color", "red");
        }
    });
});
</script>

<!-- script to control input dni  $pattern = "/^[XYZ]?\d{5,8}[A-Z]$/" -->
<script>
$(document).ready(function() {
    $("#dni").change(function() {
        var value = $("#dni").val();
        $("#dni").css("border-color", "blue");
        $("#dniHelp").html("ha entrado a la funcion leer el dni");
        $("#dniHelp").css("color", "blue");
        let number, letter;
        let expresion_regular_dni = /^[XYZ]?\d{5,8}[A-Z]$/;
        value = value.toUpperCase();
        if (expresion_regular_dni.test(value) === true) {
            number = value.substr(0, value.length - 1);
            number = number.replace('X', 0);
            number = number.replace('Y', 1);
            number = number.replace('Z', 2);
            dni = value.substr(value.length - 1, 1);
           /* console.log(dni);
            console.log(number);*/
            number = number % 23;
            letter = 'TRWAGMYFPDXBNJZSQVHLCKET';
            letter = letter.substring(number, number + 1);
            if (letter != dni) {
                console.log('Wrong ID, the letter of the NIF does not correspond');
                $("#dni").css("border-color", "red");
                $("#dniHelp").html("El DNI introducido no es correcto");
                $("#dniHelp").css("color", "red");
                return false;
            } else {
                console.log('Correct ID');
                $("#dni").css("border-color", "green");
                $("#dniHelp").html("DNI o NIE correcto");
                $("#dniHelp").css("color", "green");
                return true;
            }

        } else {
            console.log('Wrong ID, invalid format');
            $("#dniHelp").html("Faltan numeros en el DNI");
            $("#dni").css("border-color", "red");
            $("#dniHelp").css("color", "red");
            return false;
        }
        validateVat($("#dni").val());
    });

});
</script>