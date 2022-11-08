<?php
/** @var string $url_template */
use config\views;

$ruta_template_base = (new views())->ruta_template_base;
include $ruta_template_base.'assets/css/_base_css.php';
?>
<style>
    .form-control{
        border-radius: 10px !important;
    }
    .color-secondary{
        background: #f8f8f8 !important;
    }
</style>


