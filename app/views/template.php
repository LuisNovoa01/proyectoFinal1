<!DOCTYPE html>
<html>

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

    <!--- SOCIAL MEDIA ICONS -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:url" content="http://themepixels.me/bracket">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">
    <title>Acceso</title>
    <link href="public/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="public/lib/Ionicons/css/ionicons.css" rel="stylesheet">

</head>

<body class="body container-fluid p-1">
    <header>
        <!-- if $titulo is not empty    -->
        <?php if (!empty($titulo)) : ?>
        <div id="titulo">
            <h1><?php echo $titulo ?></h1>
        </div>
        <?php endif; ?>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <img src="<?= RUTA?>web/images/icons/logo-AyuntamientoArgamasillaDeAlba.webp" type="button" class="logo"
                    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                <div class="margin-left-xs">
                    <a class="nav-link town-hall-text" style="colour:black; margin:0px; padding:0px" href="<?= RUTA?>">
                        <p class="font-heading">Ayuntamiento de<br>Argamasilla de Alba</p>
                        <p>El lugar de La Mancha</p>
                </div>
                </a>

                <a class="navbar-brand" href="#" type="button"
                    style="position:right; margin-right:10px; margin-top:10px;" data-bs-toggle="collapse"
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
                        <li><a class="nav-link" href="<?= RUTA?>indexBootstrap">Index Bootstrap</a>
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
                            <li><a class="dropdown-item" href="<?= RUTA?>usersListAdmins">Gestion Users SuperAdmin</a>
                            </li>
                            <li><a class="dropdown-item" href="<?= RUTA?>departments_list">Lista Departamentos</a></li>
                            <li><a class="dropdown-item" href="<?= RUTA?>departments_listResponsive">Lista Departamentos Responsive</a></li>
                            <li><a class="dropdown-item" href="<?= RUTA?>items_list">Listar todos los items
                                    SuperAdmin</a></li>
                    </ul>
                    </li>
                    <?php } ?>
                    <?php } ?>
                    </ul>

                    <!-- BLOQUE INFO USUARIOS -->
                    <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                        <section class="col-12">
                            <?php if (Session::existe()): ?>
                            <div id="userInfo" class="d-flex">
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
                                        <input type="submit" value="login" class="btn btn-primary btn-sm"
                                            style="padding:3px">
                                        <input type="button" value="registrar" class="btn btn-info btn-sm"
                                            onclick="location.href = '<?= RUTA?>registrar'">
                                    </section>
                                </form>
                            </button>
                            <?php endif; ?>
                        </section>
                    </ul>
                </div>
            </div>
        </nav>

        <?php if (!empty($titulo2)) : ?>
        <div id="titulo">
            <h1><?php echo $titulo2 ?></h1>
        </div>
        <?php endif; ?>

        <div class="MensajesFlash"><?php mensajesFlash::imprimir_mensajes() ?></div>
        <main>
            <?= $contenido ?>
        </main>
    </header>
</body>

<footer class="footer" style="float:bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="text-center">
                    <small>

            </div>
        </div>
    </div>
    </div>
</footer>


</html>

<script type="text/javascript">
$('#photo_usuario').click(function() {
    $('#input_photo').click();
});

$('#input_photo').change(function() {
    $('#formulario_actualizar_photo').submit();
})
</script>

</html>