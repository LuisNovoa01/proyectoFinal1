<div class="template">
    <?php
    $contenido = ob_get_clean();
    /*$titulo = "Web Registro Trabajos Ayto. Argamasilla de Alba";*/
    /*$titulo2 = "INICIO";*/
    require '../app/views/template.php';
    ?>
</div>

<?php ob_start() ?>
<div class="body d-flex align-items-center justify-content-center bg-br-primary ht-100v">
    <?php if (Session::existe()): ?>
    <div id="userInfo" hidden>
        <div id="photo_user_index"
            style="background-image: url(<?= RUTA?>web/images/users/<?= Session::obtener()->getPhoto() ?>)">
        </div>
        <form id="formulario_actualizar_photo" action="subir_photo" method="post" enctype="multipart/form-data">
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
    <!-- social networks section -->
    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">
        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
            <div class="alert alert-danger" role="alert" id="lblmensaje">
                <strong class="d-block d-sm-inline-block-force">Error!</strong> Campos vacios.
            </div>

            <div class="alert alert-warning" role="alert" id="lblerror">
                <strong class="d-block d-sm-inline-block-force">Advertencia!</strong> Verificar Credenciales.
            </div>

            <div class="alert alert-warning" role="alert" id="lblregistro">
                <strong class="d-block d-sm-inline-block-force">Error!</strong> No Registrado.
            </div>
            <!-- OWN LOGIN -->
            <div>
                <h1>Inicia Sesión</h1>
                <div class="tx-center mg-b-60">Ingrese usuario y contraseña</div>
                <form action="login" method="post">
                    <input type="email" placeholder="email" name="email" id="email" class="form-control">
                    <input type="password" placeholder="password" name="password" class="form-control">
                    <section class="d-flex justify-content-evenly flex-wrap">
                        <input type="submit" value="Login" id="btnlogin" class="btn btn-info btn-block col-12">
                    </section>
                </form>
                <!-- END OWN LOGIN-->
                <br>
                <!-- LOGIN ORIGINAL SOCIAL MEDIA -->
                <div class="form-group">
                    <input type="email" id="txtcorreo" name="txtcorreo" class="form-control"
                        placeholder="Ingrese Correo Electronico">

                    <div class="form-group">
                        <input type="password" id="txtpass" name="txtpass" class="form-control"
                            placeholder="Ingrese Contraseña">
                    </div>
                    <button type="button" class="btn btn-info btn-block" id="btnlogin">Iniciar Sesion</button>


                    <input type="submit" value="Login Propio" id="btnlogin" class="btn btn-info btn-block"
                        style="padding:10px">

                </div>
                <!-- END LOGIN ORIGINAL SOCIAL MEDIA -->
                <br>
                <!-- SOCIAL MEDIA BUTTONS-->
                <a href="#" class="btn btn-primary btn-block btn-with-icon" id="btnloginf">
                    <div class="ht-40">
                        <span class="icon wd-40"><i class="fa fa-facebook"></i></span>
                        <span class="pd-x-15">Login with Facebook</span>
                    </div>
                </a>
                <a href="#" class="btn btn-danger btn-block btn-with-icon" id="btnloging">
                    <div class="ht-40">
                        <span class="icon wd-40"><i class="fa fa-google-plus"></i></span>
                        <span class="pd-x-15">Login with Gmail</span>
                    </div>
                </a>
                <a href="#" class="btn btn-dark btn-block btn-with-icon" id="btnloginh">
                    <div class="ht-40">
                        <span class="icon wd-40"><i class="fa fa-github"></i></span>
                        <span class="pd-x-15">Login with Github</span>
                    </div>
                </a>
                <!-- END SOCIAL MEDIA BUTTONS-->

                <div class="mg-t-60 tx-center">¿Todavía no esta registrado? <a
                        href="/proyectoFinal/app/views/users/registerSocialMedia.php" class="tx-info">Registrarse Redes
                        Sociales</a></div>

                <div class="mg-t-60 tx-center">¿Todavía no esta registrado? <a href="<?= RUTA?>registrar">Registrarse
                        Original</a>
                </div>
            </div>
        </div>

        <script src="public/lib/jquery/jquery.js"></script>
        <!--   <script src="public/lib/popperjs/popper.js"></script> -->
        <script src="public/lib/bootstrap/bootstrap.js"></script>

        <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-analytics.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-auth.js"></script>
        <script src="index.js"></script>
        </body>
        <!-- END SOCIAL MEDIA SECTION -->

        <?php endif; ?>
    </div>
    <section class="d-flex justify-content-around flex-wrap">

        <!-- ADMIN MENU -->
        <?php if (Session::existe()) { ?>
        <button type="button"
            class="d-flex btn btnIndex btn-secondary col-12 col-md-3 col-xl-2 d-flex align-items-center justify-content-center"
            style="margin:10px">
            <a class="nav-link index-options" style="color:white; font-size:2em" href="<?= RUTA?>my_user">Mis Datos
            </a>
            <div id="userInfo" class="photo_user_index">
                <div id="photo_usuario" class="align-items-center justify-content-center"
                    style="background-image: url(<?= RUTA?>web/images/users/<?= Session::obtener()->getPhoto() ?>)">
                </div>
                <form id="formulario_actualizar_photo" action="subir_photo" method="post" enctype="multipart/form-data">
                    <input type="file" name="photo" id="input_photo">
                    <input type="submit">
                </form>
                <div id="userInfo"><?= Session::obtener()->getNombre() ?>
                    <?= Session::obtener()->getSurname() ?>
                    <br>
                    <a href="logout" style="color:black; width:bold">cerrar sesión</a>
                </div>
            </div>
        </button>
        <button type="button" class="btn btnIndex btn-primary col-12 col-md-3 col-xl-2" style="margin:10px">
            <a class="nav-link index-options" style="color:white; font-size:2em" href="<?= RUTA?>insert_item">Insertar
                item
                <!-- image of item-->
                <i class="fa-solid fa-file-circle-plus" aria-hidden="true" style="size:20px"></i>
            </a>
        </button>
        <?php
        $conn = ConexionBD::conectar();
        $usuDAO = new UsuarioDAO($conn);
        $usuario = $usuDAO->findUserById(Session::obtener()->getId());
        ?>
        <?php if ($usuario->getRol() == 'admin' || $usuario->getRol() =='superAdmin') { ?>
        <button type="button" class="btn btnIndex btn-info col-12 col-md-3 col-xl-2" style="margin:10px">
            <a class="nav-link index-options" style="color:white; font-size:2em"
                href="<?= RUTA?>own_itemsDaylyAdmins">Mis Items
                Diarios
                <i class="fa-solid fa-list-check"></i></a>
        </button>
        <button type="button" class="btn btnIndex btn-info col-12 col-md-3 col-xl-2" style="margin:10px">
            <a class="nav-link index-options" style="color:white; font-size:2em" href="<?= RUTA?>own_itemsUsers">Mis
                Items Cliente
                <i class="fa-solid fa-id-badge"></i></a>
        </button>
        <?php if ($usuario->getRol() == 'admin') { ?>
        <button type="button" class="btn btnIndex btn-success col-12 col-md-3 col-xl-2" style="margin:10px">
            <a class="nav-link index-options" style="color:white; font-size:2em" href="<?= RUTA?>usersList">Usuarios
                <i class="fa-solid fa-users"></i>
            </a>
        </button>
        <?php } ?>
        <?php if($usuario->getRol() =='superAdmin') { ?>
        <button type="button" class="btn btnIndex btn-success col-12 col-md-3 col-xl-2" style="margin:10px">
            <a class="nav-link index-options" style="color:white; font-size:2em"
                href="<?= RUTA?>usersListAdmins">Usuarios SUPER
                <i class="fa-solid fa-users"></i>
            </a>
        </button>
        <?php } ?>
        <?php } else{?>
        <button type="button" class="btn btnIndex btn-info col-12 col-md-3 col-xl-2" style="margin:10px">
            <a class="nav-link index-options" style="color:white; font-size:2em" href="<?= RUTA?>own_itemsUsers">Mis
                Items
                <i class="fa-solid fa-id-badge"></i></i></a>
        </button>
        <?php }?>

        <!-- END ADMIN MENU -->

        <!-- SUPERADMIN MENU -->
        <?php if ($usuario->getRol() == 'superAdmin') { ?>
        <button type="button" class="btn btnIndex btn-warning col-12 col-md-3 col-xl-2" style="margin:10px">
            <a class="nav-link index-options" style="color:white; font-size:2em"
                href="<?= RUTA?>departments_list">Departamentos
                <i class="fa-solid fa-building-user"></i>
            </a>
        </button>
        <button type="button" class="btn btnIndex btn-danger col-12 col-md-3 col-xl-2" style="margin:10px">
            <a class="nav-link index-options" style="color:white; font-size:2em" href="<?= RUTA?>items_list">Todos los
                items
                <i class="fa-solid fa-sitemap"></i>
            </a>
        </button>
        <?php } ?>
        <?php } ?>
    </section>

    <!-- scripts to change Userphoto-->
    <script type="text/javascript">
    $('#photo_usuario').click(function() {
        $('#input_photo').click();
    });

    $('#input_photo').change(function() {
        $('#formulario_actualizar_photo').submit();
    })
    </script>