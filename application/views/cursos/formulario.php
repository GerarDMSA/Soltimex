<?= form_open('/Cursos/recibirdatos') ?>

<?php
    $nombre = array(
        'name' => 'nombre',
        'placeholder' => 'Escribe tu nombre'
    );
    $videos = array(
        'name' => 'videos',
        'placeholder' => 'Cantidad videos del curso'
    );
?>
    <?= form_label('Nombre', 'nombre') ?>
    <?= form_input($nombre) ?>
    <?= form_label('Numero de videos', 'videos') ?>
    <?= form_input($videos) ?>
<?= form_submit('','Subir Curso') ?>
<?= form_close() ?>

</body>
</html>