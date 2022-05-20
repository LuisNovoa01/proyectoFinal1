<?php ob_start() ?>
<div class="articulo_ver">
    <h3>Artículo</h3>
    <div class="titulo_articulo"><?= $articulo->getTitulo() ?></div>
    <?php if (count($articulo->getPhotos()) >= 1): ?>
    <?php foreach($articulo->getPhotos() as $foto):?>
        <img src="<?= RUTA?>web/imagenes_articulos/<?= $foto->getNombre_archivo() ?>" style="height: 100px">
    <?php endforeach; ?>
    <?php else: ?>
        <img src="<?= RUTA?>web/imagenes/articulo_generico.jpg"  style="height: 100px">
    <?php endif; ?>

    <div class="descripcion_articulo"><?= $articulo->getDescripcion() ?></div>
    <div class="precio_articulo"><?= $articulo->getPrecio() ?> €</div>
    <div class="contactar">CONTACTAR</div>
    <div class="fecha_artigetUsuarioculo"><?= $articulo->getFecha() ?></div>
    <h3>Vendedor</h3>
    <img src="<?= RUTA?>web/imagenes/<?= $articulo->getUsuario()->getFoto(); ?>" height="100">
    <?= $articulo->getUsuario()->getNombre(); ?>
    <?= $articulo->getUsuario()->getEmail(); ?>

    <?php if ($articulo->getUsuario()->getId() == Sesion::obtener()): ?>
        <div class="borrar_articulo"><a href="<?= RUTA?>borrar_articulo/<?= $articulo->getId() ?>/<?= $token ?>"><img src="<?= RUTA?>web/iconos/trash.svg" class="papelera"></a></div>
            <?php endif; ?>

</div>

<?php
$contenido = ob_get_clean();
require 'template.php';
?>


