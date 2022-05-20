<?php ob_start() ?>
<link href="<?= RUTA?>web/js/jQuery-TE_v.1.4.0/jquery-te-1.4.0.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?= RUTA?>web/js/jQuery-TE_v.1.4.0/jquery-te-1.4.0.min.js"></script>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <!-- Google Apis -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Datatables -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.11.5/af-2.3.7/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/cr-1.5.5/date-1.1.2/fc-4.0.2/fh-3.2.2/kt-2.6.4/r-2.2.9/rg-1.1.4/rr-1.2.8/sc-2.0.5/sb-1.3.2/sp-2.0.0/sl-1.3.4/sr-1.1.0/datatables.min.css" />

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.11.5/af-2.3.7/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/cr-1.5.5/date-1.1.2/fc-4.0.2/fh-3.2.2/kt-2.6.4/r-2.2.9/rg-1.1.4/rr-1.2.8/sc-2.0.5/sb-1.3.2/sp-2.0.0/sl-1.3.4/sr-1.1.0/datatables.min.js">
    </script>


    <!-- FONTAWESOME -->
    <script src="https://use.fontawesome.com/2a534a9a61.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css"
        integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous" />



    <link rel="stylesheet" href="<?= RUTA?>app/css/style.css">
</head>

<div class="d-flex align-items-center justify-content-center bg-br-primary ">
    <div class="row col-12">

        <form class="form-floating" action="" method="post" enctype="multipart/form-data">
      
                <div class="row" style="paddin:10px; margin:10px" >
                    <h3 class="text-center">Mis Datos de Usuario</h3>
                    <input type="hidden" name="token" value="<?= $token ?>">
                 
                    
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <img src="<?= RUTA?>web/images/icons/logo-AyuntamientoArgamasillaDeAlba.webp" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                <div class="margin-left-xs">
                    <a class="nav-link" style="colour:black" href="<?= RUTA?>">
                        <p class="font-heading"> Ayuntamiento de <br> Argamasilla de Alba </p>
                        <p class="font-primary-light-italic display@md"> El lugar de La Mancha </p>
                </div>
                </a>

                <a class="navbar-brand" href="#" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">Menu</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= RUTA?>">Inicio</a>
                        </li>
                        <li class="nav-item dropdown" hidden>
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Articulos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="nav-link" href="<?= RUTA?>insertar_articulo">Poner artículo a la venta</a>
                                </li>
                                <li><a class="nav-link" href="<?= RUTA?>listar_articulos">Listar Todos Los Articulos</a>
                                </li>
                                <hr class="dropdown-divider">
                        </li>
                        <li> <a class="nav-link" href="<?= RUTA?>mis_articulos">Mis artículos</a>
                    </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= RUTA?>insert_itemUsers">Insertar item</a>
                    </li>


                    <!-- ADMIN MENU -->
                    <?php if (Session::existe()) { ?>
                    <?php
                            $conn = ConexionBD::conectar();
                            $usuDAO = new UsuarioDAO($conn);
                            $usuario = $usuDAO->findUserById(Session::obtener()->getId());
                        ?>
                    <?php if ($usuario->getRol() == 'admin' || $usuario->getRol() =='superAdmin') { ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Administradores
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?= RUTA?>usersList">Gestion Usuarios</a></li>
                            <li><a class="dropdown-item" href="<?= RUTA?>own_itemsDaylyAdmins">Mis Items Diarios
                                    Admins</a></li>
                            <li><a class="dropdown-item" href="<?= RUTA?>own_items">Todos Mis Items sin filtros</a></li>
                            <li><a class="dropdown-item" href="<?= RUTA?>own_itemsUsers">Mis Items como Cliente</a>
                            </li>
                        </ul>
                    </li>
                    <?php } ?>

                    <!-- SUPERADMIN MENU -->
                    <?php if ($usuario->getRol() == 'superAdmin') { ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            SuperAdministradores
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?= RUTA?>usersList">Gestion Usuarios</a></li>
                            <li><a class="dropdown-item" href="<?= RUTA?>departments_list">Lista Departamentos</a></li>
                            <li><a class="dropdown-item" href="<?= RUTA?>items_list">Listar todos los items</a></li>
                    </li>
                    <li><a class="dropdown-item" href="instalaciones.php">Instalaciones</a></li>

                    </ul>
                    </li>
                    <?php } ?>
                    <?php } ?>
                    </ul>

                    <!-- BLOQUE INFO USUARIOS -->
                    <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
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
                                <div id="userInfo"><?= Session::obtener()->getNombre() ?>
                                    <?= Session::obtener()->getSurname() ?>
                                    <br>
                                    <a href="logout">cerrar sesión</a>
                                </div>
                            </div>
                            <?php else: ?>
                            <button type="button"
                                class="btn btn-secondary col-12 d-flex align-items-center justify-content-center">
                                <form id="login" style="margin:3px" action="login" method="post">
                                    <input type="text" placeholder="email" name="email" class="form-control">
                                    <input type="password" placeholder="password" name="password" class="form-control">
                                    <br>
                                    <section class="d-flex justify-content-evenly flex-wrap">
                                        <input type="submit" value="login" class="btn btn-primary" style="padding:10px">
                                        <input type="button" value="registrar"
                                            onclick="location.href = '<?= RUTA?>registrar'" class="btn btn-info">
                                    </section>
                                </form>
                            </button>
                            <?php endif; ?>
                        </section>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- FIN HEADER -->




        <div class="MensajesFlash"><?php mensajesFlash::imprimir_mensajes() ?></div>
        <main>
            <?= $contenido ?>
        </main>


                    <div class="col-md-6 col-12 m-10" style="padding-bottom: 20px">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="name" value=<?= Session::obtener()->getNombre() ?> class="form-control"
                            aria-describedby="nameHelp">
                    </div>
                    <div class="col-md-6 col-12" style="padding-bottom:20px">
                        <label class="form-label">Apellidos</label>
                        <input type="text" name="surname" value=<?= Session::obtener()->getSurname() ?>
                            class="form-control" aria-describedby="surnameHelp">
                    </div>
                    <div class="col-md-6 col-12" style="padding-bottom:20px">
                        <label class="form-label">DNI o NIE completo</label>
                        <input type="dni" name="dni" value=<?= Session::obtener()->getDni() ?> class="form-control"
                            aria-describedby="dniHelp">
                    </div>
                    <div class="col-md-6 col-12" style="padding-bottom:20px">
                        <label class="form-label">Teléfono</label>
                        <input type="number" name="phone" value=<?= Session::obtener()->getPhone() ?>
                            class="form-control" max=999999999>
                    </div>
                    <div class="col-md-6 col-12" style="padding-bottom:20px">
                        <label class="form-label">Email/Direccion de correo electrónico</label>
                        <input type="email" name="email" value=<?= Session::obtener()->getEmail() ?> class="form-control"
                            aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Nunca compartas tu email con nadie</div>
                    </div>

                    <div class="col-md-6 col-12" style="padding-bottom:20px">
                        <label class="form-label">Código Postal</label>
                        <select class="form-control" id="postalCode" name="postalCode" required>
                            <option value=<?= Session::obtener()->getPostalCode() ?>>Seleccione Código Postal</option>
                            <?php foreach ($list_postalCodes as $postalCode): ?>
                            <option  value="<?php echo $postalCode->code  ?>">
                                <?php echo $postalCode->code, " - " ; echo $postalCode->town; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-6 col-12" style="padding-bottom:20px">
                        <label class="form-label">Password</label>
                        <input class="form-control" type="password" name="password" value=<?= Session::obtener()->getPassword() ?> >
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
                        <label class="form-label" >Foto del Usuario</label>
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
                        <button type="submit" value="registrar" class="btn btn-primary w-75">Cambiar mis datos de Usuario</button>
                    </div>
                </div>
        </form>
    </div>
</div>

<?php
$contenido = ob_get_clean();
$titulo = "Web Registro Trabajos Ayto. Argamasilla de Alba";
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
}   );
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