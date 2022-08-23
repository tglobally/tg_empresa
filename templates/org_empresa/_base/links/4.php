<?php /** @var tglobally\tg_empresa\controllers\controlador_org_empresa $controlador */ ?>
<?php $number = '4.gris'; ?>
<?php $section = 'org_empresa'; ?>
<a href="index.php?seccion=org_empresa&accion=contacto&registro_id=<?php echo $controlador->registro_id; ?>&session_id=<?php echo $controlador->session_id; ?>">
    <?php include "templates/$section/_base/buttons/$number.php"; ?>
</a>
