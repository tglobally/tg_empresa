<?php /** @var tglobally\tg_empresa\controllers\controlador_org_empresa $controlador */ ?>
<?php /** @var string $seccion */ ?>
<?php use config\views; ?>
<?php include (new views())->ruta_templates."number.php"; ?>
<?php echo($controlador->html_base->menu_lateral('Alta Empresa')); ?>