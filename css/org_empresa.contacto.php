<?php
/** @var string $url_template */
use config\views;

$ruta_template_base = (new views())->ruta_template_base;
include $ruta_template_base.'assets/css/_base_css.php';
?>


<style>
.label-alerta-oculto {
    display: none;
}

.label-alerta {
    display: block;
    color: red;
}
</style>